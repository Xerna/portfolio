<?php
loadPartial('head');
loadPartial('navbar');
?>

<div id="hero-section" class=" w-full bg-dark-navy flex justify-center items-center flex-col text-center p-10">
    <div class="w-40 h-40 bg-sun-yellow rounded-full mt-6 mb-4">
        <img src="<?= BASE_URL; ?>/src/assets/img/avatar.png " alt="">
    </div>
    <h1 class="text-white text-4xl font-bold  mb-2">Hi I´m Ricardo Cerna</h1>
    <p class="text-white text-lg mb-4">Full Stack Developer</p>
    <ul class="flex justify-center gap-4">
        <li>
            <a href="" class="text-white hover:text-sun-yellow">
                <i class="fab fa-github text-xl"></i>
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/in/ricardo-cerna-161b861b7/" class="text-white hover:text-sun-yellow">
                <i class="fab fa-linkedin text-xl"></i>
            </a>
        </li>
        <li>
            <a href="" class="text-white hover:text-sun-yellow">
                <i class="fab fa-whatsapp text-xl"></i>
            </a>
        </li>

    </ul>
</div>