<section id="obra" class="py-20 bg-slate-50 border-y border-slate-200/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-700 border border-amber-200 mb-3">
                Cronograma Físico-Financeiro
            </span>
            <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                Evolução da Construção do Complexo
            </h2>
            <p class="text-slate-600 text-base sm:text-lg leading-relaxed">
                Acompanhe o avanço real da obra. Cada etapa é documentada e fiscalizada com rigor técnico e transparência absoluta.
            </p>
        </div>

        <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/80 shadow-sm mb-16 max-w-4xl mx-auto">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600 bg-amber-50 px-3 py-1 rounded-full">
                        Etapa Atual em Execução
                    </span>
                    <h3 class="font-display font-bold text-2xl text-slate-900 mt-2">Fase 3: Acabamentos & Instalações Finais</h3>
                </div>
                <div class="text-right sm:shrink-0">
                    <span class="font-display text-3xl font-extrabold text-brand-600">68%</span>
                    <span class="text-xs text-slate-500 block">da meta atingida</span>
                </div>
            </div>

            <div class="w-full bg-slate-100 rounded-full h-3.5 mb-4 overflow-hidden">
                <div class="bg-gradient-to-r from-brand-600 to-hope-500 h-full rounded-full transition-all duration-1000" style="width: 68.5%"></div>
            </div>

            <div class="flex flex-wrap items-center justify-between text-xs text-slate-500 gap-2">
                <span>Arrecadado: <strong class="text-slate-900">R$ 342.500</strong></span>
                <span>Meta Fase 3: <strong class="text-slate-900">R$ 500.000</strong></span>
                <span>Restante para entrega: <strong class="text-amber-600">R$ 157.500</strong></span>
            </div>
        </div>

        <div class="relative max-w-4xl mx-auto">
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-slate-200 md:-translate-x-0.5"></div>

            <div class="space-y-10">
                <div class="relative flex items-start gap-6 md:gap-0">
                    <div class="hidden md:block w-1/2 pr-10 text-right">
                        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm inline-block text-left">
                            <span class="inline-flex items-center gap-1 px-3 py-0.5 bg-hope-100 text-hope-700 text-xs font-bold rounded-full"><span class="material-symbols-outlined text-[14px]">check_circle</span> 100% Concluída</span>
                            <h3 class="font-display font-bold text-slate-900 text-lg mt-2">Fase 1 — Diagnóstico & Engenharia</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Mapeamento dos dados do Censo IBGE e INEP, elaboração do projeto arquitetônico, estrutural e aprovação nos órgãos municipais.</p>
                        </div>
                    </div>
                    <div class="absolute left-4 md:left-1/2 w-5 h-5 bg-hope-600 rounded-full border-4 border-white md:-translate-x-2.5 mt-1 shadow-sm"></div>
                    <div class="md:hidden pl-12">
                        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
                            <span class="inline-flex items-center gap-1 px-3 py-0.5 bg-hope-100 text-hope-700 text-xs font-bold rounded-full"><span class="material-symbols-outlined text-[14px]">check_circle</span> 100% Concluída</span>
                            <h3 class="font-display font-bold text-slate-900 text-lg mt-2">Fase 1 — Diagnóstico & Engenharia</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Mapeamento dos dados do Censo IBGE e INEP e aprovações legais do projeto.</p>
                        </div>
                    </div>
                    <div class="hidden md:block w-1/2 pl-10"></div>
                </div>

                <div class="relative flex items-start gap-6 md:gap-0">
                    <div class="hidden md:block w-1/2 pr-10"></div>
                    <div class="hidden md:block w-1/2 pl-10">
                        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
                            <span class="inline-flex items-center gap-1 px-3 py-0.5 bg-hope-100 text-hope-700 text-xs font-bold rounded-full"><span class="material-symbols-outlined text-[14px]">check_circle</span> 100% Concluída</span>
                            <h3 class="font-display font-bold text-slate-900 text-lg mt-2">Fase 2 — Fundação & Alvenaria</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Concretagem de fundações, elevação de paredes, lajes, cobertura metálica e tubulações hidrossanitárias do prédio central.</p>

                            {{-- Painel de Transparência Financeira: Consórcio Estrutural da Fase 2 --}}
                            <div class="mt-5 rounded-2xl border border-brand-200/80 bg-gradient-to-br from-brand-50/70 via-white to-white p-4" aria-label="Consórcio Estrutural da Fase 2">
                                <div class="flex items-center justify-between gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1.5 text-[11px] font-extrabold uppercase tracking-wider text-brand-800">
                                        <span class="material-symbols-outlined text-base">account_balance</span> Consórcio Estrutural
                                    </span>
                                    <span class="inline-flex items-center gap-1 text-[10.5px] font-bold text-slate-600">
                                        <span class="material-symbols-outlined text-sm">event_repeat</span> Vencimento dia {{ $consorcio['dia_vencimento'] }}
                                    </span>
                                </div>

                                <div class="flex items-end justify-between gap-2 mb-1.5">
                                    <p class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-600">
                                        <span class="material-symbols-outlined text-sm text-brand-600 shrink-0">payments</span>
                                        {{ $consorcio['parcelas_pagas'] }} de {{ $consorcio['total_parcelas'] }} parcelas pagas ({{ number_format($consorcio['percentual_pago'], 1, ',', '.') }}%)
                                    </p>
                                    <p class="font-display text-lg font-extrabold text-brand-700">{{ number_format($consorcio['percentual_pago'], 1, ',', '.') }}%</p>
                                </div>

                                <div class="w-full bg-slate-100 rounded-full h-2.5 mb-3 overflow-hidden">
                                    <div class="bg-gradient-to-r from-brand-600 to-hope-500 h-full rounded-full transition-all duration-1000" data-consorcio-progresso="{{ $consorcio['percentual_pago'] }}" style="width: {{ $consorcio['percentual_pago'] }}%"></div>
                                </div>

                                <div class="grid grid-cols-2 gap-2">
                                    <div class="rounded-xl bg-white border border-slate-200/80 px-2.5 py-2">
                                        <p class="flex items-center gap-1 text-[10px] font-bold uppercase tracking-wide text-slate-500"><span class="material-symbols-outlined text-sm text-brand-600">trending_up</span> Amortizado</p>
                                        <p class="font-display text-sm font-extrabold text-slate-900 mt-0.5">R$ {{ number_format($consorcio['valor_amortizado'], 2, ',', '.') }}</p>
                                    </div>
                                    <div class="rounded-xl bg-white border border-slate-200/80 px-2.5 py-2">
                                        <p class="flex items-center gap-1 text-[10px] font-bold uppercase tracking-wide text-slate-500"><span class="material-symbols-outlined text-sm text-amber-600">payments</span> Saldo restante</p>
                                        <p class="font-display text-sm font-extrabold text-amber-600 mt-0.5">R$ {{ number_format($consorcio['saldo_devedor'], 2, ',', '.') }}</p>
                                    </div>
                                </div>

                                <p class="mt-3 flex items-start gap-1.5 text-[10.5px] leading-relaxed text-slate-500">
                                    <span class="material-symbols-outlined text-sm text-brand-600 shrink-0 mt-px">event_repeat</span>
                                    <span>Financiamento estrutural assumido integralmente pela mantenedora IBNP Guapó via consórcio imobiliário (vencimento todo dia 15).</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-4 md:left-1/2 w-5 h-5 bg-hope-600 rounded-full border-4 border-white md:-translate-x-2.5 mt-1 shadow-sm"></div>
                    <div class="md:hidden pl-12">
                        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
                            <span class="inline-flex items-center gap-1 px-3 py-0.5 bg-hope-100 text-hope-700 text-xs font-bold rounded-full"><span class="material-symbols-outlined text-[14px]">check_circle</span> 100% Concluída</span>
                            <h3 class="font-display font-bold text-slate-900 text-lg mt-2">Fase 2 — Fundação & Alvenaria</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Fundações, paredes, lajes e cobertura metálica concluídas com sucesso.</p>

                            {{-- Painel de Transparência Financeira: Consórcio Estrutural da Fase 2 --}}
                            <div class="mt-5 rounded-2xl border border-brand-200/80 bg-gradient-to-br from-brand-50/70 via-white to-white p-4" aria-label="Consórcio Estrutural da Fase 2">
                                <div class="flex items-center justify-between gap-2 mb-2.5">
                                    <span class="inline-flex items-center gap-1.5 text-[11px] font-extrabold uppercase tracking-wider text-brand-800">
                                        <span class="material-symbols-outlined text-base">account_balance</span> Consórcio Estrutural
                                    </span>
                                    <span class="inline-flex items-center gap-1 text-[10.5px] font-bold text-slate-600">
                                        <span class="material-symbols-outlined text-sm">event_repeat</span> Vencimento dia {{ $consorcio['dia_vencimento'] }}
                                    </span>
                                </div>

                                <div class="flex items-end justify-between gap-2 mb-1.5">
                                    <p class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-600">
                                        <span class="material-symbols-outlined text-sm text-brand-600 shrink-0">payments</span>
                                        {{ $consorcio['parcelas_pagas'] }} de {{ $consorcio['total_parcelas'] }} parcelas pagas ({{ number_format($consorcio['percentual_pago'], 1, ',', '.') }}%)
                                    </p>
                                    <p class="font-display text-lg font-extrabold text-brand-700">{{ number_format($consorcio['percentual_pago'], 1, ',', '.') }}%</p>
                                </div>

                                <div class="w-full bg-slate-100 rounded-full h-2.5 mb-3 overflow-hidden">
                                    <div class="bg-gradient-to-r from-brand-600 to-hope-500 h-full rounded-full transition-all duration-1000" data-consorcio-progresso="{{ $consorcio['percentual_pago'] }}" style="width: {{ $consorcio['percentual_pago'] }}%"></div>
                                </div>

                                <div class="grid grid-cols-2 gap-2">
                                    <div class="rounded-xl bg-white border border-slate-200/80 px-2.5 py-2">
                                        <p class="flex items-center gap-1 text-[10px] font-bold uppercase tracking-wide text-slate-500"><span class="material-symbols-outlined text-sm text-brand-600">trending_up</span> Amortizado</p>
                                        <p class="font-display text-sm font-extrabold text-slate-900 mt-0.5">R$ {{ number_format($consorcio['valor_amortizado'], 2, ',', '.') }}</p>
                                    </div>
                                    <div class="rounded-xl bg-white border border-slate-200/80 px-2.5 py-2">
                                        <p class="flex items-center gap-1 text-[10px] font-bold uppercase tracking-wide text-slate-500"><span class="material-symbols-outlined text-sm text-amber-600">payments</span> Saldo restante</p>
                                        <p class="font-display text-sm font-extrabold text-amber-600 mt-0.5">R$ {{ number_format($consorcio['saldo_devedor'], 2, ',', '.') }}</p>
                                    </div>
                                </div>

                                <p class="mt-3 flex items-start gap-1.5 text-[10.5px] leading-relaxed text-slate-500">
                                    <span class="material-symbols-outlined text-sm text-brand-600 shrink-0 mt-px">event_repeat</span>
                                    <span>Financiamento estrutural assumido integralmente pela mantenedora IBNP Guapó via consórcio imobiliário (vencimento todo dia 15).</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative flex items-start gap-6 md:gap-0">
                    <div class="hidden md:block w-1/2 pr-10 text-right">
                        <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-200 shadow-sm inline-block text-left">
                            <span class="inline-flex items-center gap-1 px-3 py-0.5 bg-amber-200 text-amber-900 text-xs font-bold rounded-full animate-pulse"><span class="material-symbols-outlined text-[14px]">rocket_launch</span> 68% Concluída · Em Execução</span>
                            <h3 class="font-display font-bold text-slate-900 text-lg mt-2">Fase 3 — Acabamentos & Mobiliário</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Piso emborrachado pedagógico, forro termoacústico, iluminação LED, pintura lavável, computadores do laboratório e cadeiras do auditório.</p>
                        </div>
                    </div>
                    <div class="absolute left-4 md:left-1/2 w-5 h-5 bg-amber-500 rounded-full border-4 border-white md:-translate-x-2.5 mt-1 shadow-sm animate-ping"></div>
                    <div class="md:hidden pl-12">
                        <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-200 shadow-sm">
                            <span class="inline-flex items-center gap-1 px-3 py-0.5 bg-amber-200 text-amber-900 text-xs font-bold rounded-full"><span class="material-symbols-outlined text-[14px]">rocket_launch</span> 68% Concluída · Em Execução</span>
                            <h3 class="font-display font-bold text-slate-900 text-lg mt-2">Fase 3 — Acabamentos & Mobiliário</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">Revestimentos, iluminação, mobiliário pedagógico e parque infantil adaptado.</p>
                        </div>
                    </div>
                    <div class="hidden md:block w-1/2 pl-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>
