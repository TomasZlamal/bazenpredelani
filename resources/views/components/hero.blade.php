<section id="hero" class="section relative h-[35rem] flex items-center text-center custom-image">
    <div class="max-width-container w-full z-10 relative">
        <h1 class="text-bs-white">{{ $motto }}</h1>
    </div>
</section>
<style>
#hero {
    background-image: url({!! $image !!});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
