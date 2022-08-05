<template>

<nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container">
    <a> <img src="img/logo.png"  alt="logo" height="40" width="40" >
</a>
    <a class="navbar-brand selected1" href="#">My MDC</a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <Link class="nav-link " :class="{'selected': $page.component == 'Home'}" href="/">Home</Link>
        </li>

        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component == 'School'}" href="/school">Courses</Link>
        </li>

        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component == 'MdcBuilding'}" href="/mdcbuilding">MDC Chapel</Link>
        </li>

        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component == 'Teacher'}" href="/teacher">SHS Building</Link>
        </li>

        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component == 'Contact'}" href="/contact">Contact Number</Link>
        </li>
    
      </ul>
    </div>
  </div>
</nav>

<section class="container bg-white p-4 mt-5 rounded-3">
    <slot />
    <footer class="text-center mt-5">

    Copyright @copy; 2022. All rights reserved. 

</footer>
</section>


    
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

</script>

<style scoped>
section{

  background-color: rgb(212, 7, 7);
  opacity: .9;

}

.selected{
  color: rgba(30, 9, 138, 0.722);
  font-weight: bold;

}
.selected1{
  color: rgb(255, 255, 255);
  font-weight: medium;

}
.dark{
  color: rgba(30, 9, 138, 0.722);
  font-weight: bold;
}

</style>