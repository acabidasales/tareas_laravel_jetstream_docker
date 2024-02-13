<script setup>
import { defineProps } from 'vue';

defineProps({
    tareas: Object,
});

</script>
<template>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
<div class="bg-gradient-to-r from-slate-800 to-gray-600 min-h-screen p-8">
    <div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-semibold text-white mb-6">Listado de tareas</h1>

    <form action="tareas/create">
        <button class="bg-blue-600 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded bottom-0" type="submit">Crear</button>
    </form>
        <br><br>
    <ul class="grid grid-cols-1 md:grid-cols-3  gap-8">
        <li class="bg-white rounded-lg shadow-md flex relative" v-for="tarea in tareas" :key="tarea.id">
            <a v-bind:href="'tareas/'+ tarea.id">
            <div class="ml-4 w-full h-full pt-6 pr-6 pb-6">
                <h2 class="text-xl font-semibold mb-2">{{ tarea.titulo_tarea }}</h2>
                <h4 class="text-md font-semibold mb-2">{{ tarea.categoria.categoria }}</h4>
                <p class="text-blue-400">{{ tarea.descripcion_tarea }}</p>
                <p v-if="tarea.puntos == 1" class="text-blue-700 font-semibold">{{ tarea.puntos }} punto</p>
                <p v-else class="text-blue-700 font-semibold">{{ tarea.puntos }} puntos</p>
                <br><br><br>
            </div>
            </a>
            <a v-bind:href="'tareas/'+ tarea.id + '/edit'" class="bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-4 rounded absolute bottom-0 w-1/2 left-0 pb-8 text-center">Editar</a>
            <form method="post" :action="`/tareas/${tarea.id}`">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Eliminar Tarea" class="bg-red-600 hover:bg-red-400 text-white font-bold py-2 rounded absolute bottom-0 w-1/2 right-0 pb-8 text-center">
            </form>
            <button class="bg-blue-600 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded absolute bottom-0 w-full left-0 pb-0">Completar</button>
        </li>

    </ul>
    </div>
</div>

</template>
