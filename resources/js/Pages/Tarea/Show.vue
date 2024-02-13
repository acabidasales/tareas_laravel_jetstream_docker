<script setup>

defineProps({
    tareas: Object,
});

</script>

<template>

<div class="bg-gradient-to-r from-slate-800 to-gray-600 min-h-screen p-8">
    <div class="h-screen/ items-center justify-center bg-gray-800 backdrop-blur-xl backdrop-opacity-10 shadow-xl rounded pt-6 self-center p-8 text-white">
        <h1 class="text-3xl font-semibold text-white mb-6">{{ tareas.titulo_tarea }} ID: {{ tareas.id }}</h1><br>
        <p class="text-white">{{ tareas.descripcion_tarea }}</p><br><br>
        <h2 class="text-md font-semibold mb-2 text-white">{{ tareas.categoria.categoria }}</h2> {{  tareas.categoria.descripcion }}<br><br>
        <h2 class="text-md font-semibold mb-2 text-white">{{ tareas.tipo.tipo }}</h2> {{  tareas.tipo.descripcion }}<br><br>
        <p v-if="tareas.puntos == 1" class="text-white font-semibold">Se obtiene {{ tareas.puntos }} punto al completar<br></p>
        <p v-else class="text-white font-semibold">Se obtienen {{ tareas.puntos }} puntos al completar<br></p>
        <form action="../tareas">
            <button class="bg-blue-600 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded absolute bottom-0 w-full left-0 pb-0">Volver</button>
        </form>
        <br><br><br>
    </div>

</div>

</template>
