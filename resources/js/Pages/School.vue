


<template>
    <h2 class="text-dark text-center">Courses and Dean Teacher's</h2>
    <hr>
<div class="d-flex justify-content-between">
    <div class="card mb-3" v-for="department in departments" :key="department.id">
        <div class="card-header bg-primary text-light text-center">
            <h7>{{department.department_name}}</h7>
        </div>
        <div class="card-body bg-dark text-light text-center">
           
           <ul>
            <li><h6>{{department.teachers_name}}</h6></li>
            <li><h6>{{department.age}}</h6></li>
           <li> <h6>{{department.work}}</h6></li>
           </ul> 
           
            

        </div>
    </div>
</div>
</template>
<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        departments: Array
    }
}
</script>

<style scoped>
.card {
    width: 80%;
    padding: 2px;
    margin: 20px;
    
}

</style>
