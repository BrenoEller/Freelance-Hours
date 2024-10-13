@props(['status'])
<span {{ $attributes->class(['text-[#000] rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide',
            'bg-[#C0F7B4]' => $status == App\ProjectStatus::Open,
            'bg-[#FECDD3]' => $status == App\ProjectStatus::Closed ])}}>
    {{ $status->label() }}
</span>