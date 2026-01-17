@props([
    'type' => 'primary', // 'primary', 'secondary', 'success', 'danger', 'warning'
    'href' => null,
    'icon' => null,
    'label' => 'Button',
    'size' => 'md' // 'sm', 'md', 'lg'
])

@php
    $baseClasses = 'btn';
    $typeClasses = [
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary', 
        'success' => 'btn-success',
        'danger' => 'btn-danger',
        'warning' => 'btn-warning'
    ];
    
    $sizeClasses = [
        'sm' => 'btn-sm',
        'md' => '',
        'lg' => 'btn-lg'
    ];
    
    $classes = $baseClasses . ' ' . ($typeClasses[$type] ?? $typeClasses['primary']) . ' ' . ($sizeClasses[$size] ?? '');
@endphp

@if($href)
    <a href="{{ $href }}" class="{{ $classes }}" {{ $attributes }}>
        @if($icon)
            <i class="fas fa-{{ $icon }}"></i>
        @endif
        {{ $label }}
    </a>
@else
    <button type="button" class="{{ $classes }}" {{ $attributes }}>
        @if($icon)
            <i class="fas fa-{{ $icon }}"></i>
        @endif
        {{ $label }}
    </button>
@endif