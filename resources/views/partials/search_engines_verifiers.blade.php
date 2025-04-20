@php use App\Models\SettingCached; @endphp
<meta name="google-site-verification" content="{{ SettingCached::get('google_site_verification') ?? ''}}" />
<meta name="msvalidate.01" content="{{ SettingCached::get('bing_site_verification') ?? ''}}" />
