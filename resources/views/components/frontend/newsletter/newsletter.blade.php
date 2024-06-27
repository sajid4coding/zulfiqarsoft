<div class="cs-newsletter cs-style1">
    <form action="{{route('newsletter.post')}}" class="cs-newsletter_form">
    @csrf
        <input type="email" name="newsletterEmail" class="cs-newsletter_input" placeholder="example@gmail.com" />
        @if($errors->has('newsletterEmail'))
            <small class="text-danger">{{ $errors->first('newsletterEmail') }}</small>
        @endif
        @if (session('subscribed'))
            <small class="text-success">{{ session('subscribed') }}</small>
        @endif
        <button class="cs-newsletter_btn">
            <span>Send</span>
        </button>
    </form>
    <div class="cs-newsletter_text"> {{$generalsetting->newsletter_text}} </div>
</div>
