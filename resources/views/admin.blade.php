@extends('layouts.app')

@section('title', 'Berichten | Flex Dev')

@section('content')
    <section class="min-h-screen px-6 pt-28 pb-20">
        <div class="max-w-4xl mx-auto w-full">
            <div class="flex items-center justify-between mb-2">
                <h2 class="text-3xl font-bold tracking-tight">Berichten</h2>
                <a href="{{ route('home') }}" class="text-sm text-slate-400 hover:opacity-70 transition-opacity">&larr; Site</a>
            </div>
            <p class="text-sm text-slate-400 mb-10">{{ $messages->count() }} bericht(en) ontvangen.</p>

            @if ($messages->isEmpty())
                <p class="text-sm text-slate-500">Nog geen berichten ontvangen.</p>
            @else
                <div class="space-y-4">
                    @foreach ($messages as $msg)
                        @php
                            $labelMap = [
                                'q_project_type' => 'Type project',
                                'q_design' => 'Ontwerp',
                                'q_what_change' => 'Aanpassing',
                                'q_has_site' => 'Bestaande site',
                                'q_bug_location' => 'Probleem locatie',
                                'q_urgency' => 'Urgentie',
                                'q_optimize_what' => 'Optimalisatie',
                            ];
                            $details = is_string($msg->details) ? json_decode($msg->details, true) : $msg->details;
                        @endphp
                        <div class="p-6 rounded-xl bg-white/5 border border-white/10">
                            <div class="flex items-start justify-between mb-4">
                                <div>
                                    <span class="font-medium text-base">{{ $msg->name }}</span>
                                    <span class="text-sm text-slate-400 ml-3">{{ $msg->email }}</span>
                                </div>
                                <span class="text-xs text-slate-500 whitespace-nowrap">{{ $msg->created_at->format('d-m-Y H:i') }}</span>
                            </div>

                            <div class="border-t border-white/10 pt-4 space-y-2 text-sm">
                                <div class="flex">
                                    <span class="w-32 text-slate-400 shrink-0">Dienst</span>
                                    <span>{{ $msg->service }}</span>
                                </div>

                                @if (is_array($details))
                                    @foreach ($details as $key => $val)
                                        <div class="flex">
                                            <span class="w-32 text-slate-400 shrink-0">{{ $labelMap[$key] ?? $key }}</span>
                                            <span>{{ $val }}</span>
                                        </div>
                                    @endforeach
                                @endif

                                @if ($msg->phone)
                                    <div class="flex">
                                        <span class="w-32 text-slate-400 shrink-0">Telefoon</span>
                                        <span>{{ $msg->phone }}</span>
                                    </div>
                                @endif

                                @if ($msg->company)
                                    <div class="flex">
                                        <span class="w-32 text-slate-400 shrink-0">Bedrijf</span>
                                        <span>{{ $msg->company }}</span>
                                    </div>
                                @endif

                                @if ($msg->preference)
                                    <div class="flex">
                                        <span class="w-32 text-slate-400 shrink-0">Contact voorkeur</span>
                                        <span>{{ $msg->preference }}</span>
                                    </div>
                                @endif

                                @if ($msg->message)
                                    <div class="pt-3 mt-3 border-t border-white/5">
                                        <span class="block text-xs text-slate-400 mb-1">Extra toelichting</span>
                                        <p class="opacity-70 leading-relaxed">{{ $msg->message }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
