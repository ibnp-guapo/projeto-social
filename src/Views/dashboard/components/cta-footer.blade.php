<footer class="border-t border-slate-200 bg-slate-900 text-white">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[1fr_auto] lg:items-center">
            <div>
                <h2 class="text-2xl font-extrabold tracking-tight">Apoie a construção da escola e ative o auditório multiuso</h2>
                <p class="mt-2 max-w-2xl text-sm leading-relaxed text-slate-300">
                    Cada vaga na creche devolve uma família ao mercado de trabalho; cada turno do auditório
                    devolve segurança, cultura e futuro para os {{ number_format($resumo_executivo['populacao_contraturno_6a14'], 0, ',', '.') }}
                    estudantes de 6 a 14 anos. Pequenos gestos somados transformam o diagnóstico em ação.
                </p>
                <p class="mt-3 text-xs text-slate-400">
                    Sites legítimos de doação e contato com o projeto: use o compartilhamento abaixo ou acesse o
                    repositório oficial do projeto para falar com a equipe.
                </p>
            </div>
            <div class="flex flex-col gap-3 sm:flex-row">
                <a href="https://github.com/fabiooliveir/projeto-social" target="_blank" rel="noopener"
                   class="inline-flex items-center justify-center gap-2 rounded-xl bg-cyan-500 px-6 py-3.5 text-center text-sm font-bold text-slate-900 shadow-sm transition hover:bg-cyan-400 focus-visible:outline-2">
                    <span class="material-symbols-outlined text-[18px]">volunteer_activism</span> Quero Apoiar a Construção da Escola
                </a>
                <a href="/api/indicadores/guapo/download"
                   class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-600 bg-slate-800 px-6 py-3.5 text-center text-sm font-bold text-white transition hover:border-slate-500">
                    <span class="material-symbols-outlined text-[18px]">download</span> Baixar o Diagnóstico Completo em JSON
                </a>
            </div>
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Compartilhar:</p>
                <a href="https://wa.me/?text=Diagn%C3%B3stico%20educacional%20de%20Guap%C3%B3-GO%20-%20" target="_blank" rel="noopener"
                   data-compartilha-whatsapp
                   class="inline-flex items-center justify-center gap-1.5 rounded-xl border border-slate-600 bg-slate-800 px-5 py-2.5 text-center text-sm font-bold text-white transition hover:border-emerald-500 hover:text-emerald-300">
                    <span class="material-symbols-outlined text-[18px]">chat</span> WhatsApp
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=" target="_blank" rel="noopener"
                   data-compartilha-linkedin
                   class="inline-flex items-center justify-center gap-1.5 rounded-xl border border-slate-600 bg-slate-800 px-5 py-2.5 text-center text-sm font-bold text-white transition hover:border-cyan-400 hover:text-cyan-300">
                    <span class="material-symbols-outlined text-[18px]">share</span> LinkedIn
                </a>
            </div>
        </div>

        {{-- Bloco Formal de Governança e Transparência OSC Mantenedora (MROSC Art. 11) --}}
        <div class="mt-12">
            @include('components.osc-governance-card')
        </div>

        <div class="mt-10 border-t border-slate-800 pt-6 text-center text-xs text-slate-400 space-y-1.5">
            <p>
                Escola Social de Guapó · Gerida pela <strong>Igreja Batista Nacional da Paz de Guapó</strong> (CNPJ 02.930.019/0001-62).
                Conformidade MROSC (Lei 13.019/2014) · <a href="https://ibnpguapo.org.br" target="_blank" rel="noopener noreferrer" class="text-[#ff8d75] hover:underline font-semibold">ibnpguapo.org.br</a>
            </p>
            <p>
                Fontes de Dados Públicos: IBGE · Censo Demográfico 2022 (Tabela 9514) e INEP · Censo Escolar (2008–2025).
                Cache consolidado em <code class="text-slate-300">storage/data/guapo_education_cache.json</code>.
            </p>
        </div>
    </div>
</footer>