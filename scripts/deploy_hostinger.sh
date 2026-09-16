#!/usr/bin/env bash

# ==============================================================================
# Script de Deploy Contínuo - Hostinger
# Aplicação: Escola Social de Guapó (social.ibnpguapo.org.br)
# ==============================================================================

set -euo pipefail

TARGET_DIR="${HOME}/domains/social.ibnpguapo.org.br/projeto-social"

echo "[DEPLOY] Iniciando deploy em: $(date '+%Y-%m-%d %H:%M:%S')"

if [ ! -d "${TARGET_DIR}" ]; then
    echo "[ERRO] Diretório do projeto não encontrado: ${TARGET_DIR}" >&2
    exit 1
fi

cd "${TARGET_DIR}"

echo "[DEPLOY] Verificando integridade da árvore git..."
if [ -n "$(git status --porcelain)" ]; then
    echo "[AVISO] Modificações locais detectadas no servidor. Limpando alterações não rastreadas antes do pull..."
    git checkout -- .
fi

echo "[DEPLOY] Atualizando código com a branch main..."
git fetch origin main
PREV_COMMIT=$(git rev-parse --short HEAD)
git pull origin main
NEW_COMMIT=$(git rev-parse --short HEAD)
echo "[DEPLOY] Atualizado com sucesso: ${PREV_COMMIT} -> ${NEW_COMMIT}"

echo "[DEPLOY] Garantindo diretórios e permissões do storage..."
mkdir -p storage/views_cache storage/data storage/cache
chmod -R 775 storage

echo "[DEPLOY] Limpando cache de views compiladas do Blade..."
php -r '
$dir = __DIR__ . "/storage/views_cache";
if (is_dir($dir)) {
    foreach (glob($dir . "/*") ?: [] as $file) {
        if (is_file($file)) {
            @unlink($file);
        }
    }
}
'

echo "[DEPLOY] Deploy concluído com sucesso em: $(date '+%Y-%m-%d %H:%M:%S')!"
