<div class="mb-6">
    <label class="block text-sm text-slate-400 mb-3">{{ $label }}</label>
    <div class="flex flex-wrap gap-2">
        <input type="hidden" name="{{ $name }}" class="chip-value">
        @foreach ($options as $opt)
        <button type="button" class="chip-btn px-4 py-2.5 rounded-xl border border-white/10 bg-white/[0.02] text-sm text-slate-300 hover:border-blue-400/40 hover:bg-blue-500/5 transition-all duration-200 flex items-center gap-2 cursor-pointer" data-value="{{ $opt['value'] }}">
            <span>{{ $opt['icon'] }}</span>
            <span>{{ $opt['text'] }}</span>
        </button>
        @endforeach
    </div>
</div>
