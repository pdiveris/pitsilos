@php use App\Models\SettingCached; @endphp
{!! SettingCached::get('matomo_analytics') ?? '' !!}
