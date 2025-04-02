<!-- resources/views/page.blade.php -->

@extends('layouts.minimal')

@section('content')
    <style>
    </style>
    <section class="section">
        <div class="columns">
            <div class="column is-one-fifth"></div>
            <div class="column">
                <h1 class="title carlito_fat has-text-grey is-size-5-mobile">
                    OOOPS
                </h1>
                <p class="is-size-5-desktop carlito">
                    This web site has now moved to <a href="https://pitsilosphotography.com/">pitsilosphotography.com</a><br/>
                    Click on the link if you are not redirected in a few seconds.<br/>

                    Αυτός ο ιστότοπος πλέον κοιμήθηκε. Παρακαλώ πηγαίντε στο <a href="https://pitsilosphotography.com/">pitsilosphotography.com</a><br/>
                    Αν δεν σας πάει αυτόματα σε μερικά δευτερόλεπτα κάντε κλικ στον σύνδεσμο
                </p>
            </div>
            <div class="column is-one-fifth"></div>
        </div>
    </section>
    <script>
        setTimeout("location.href = 'https://pitsilosphotography.com';",1500);
    </script>
@endsection
