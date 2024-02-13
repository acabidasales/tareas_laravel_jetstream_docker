<script setup>

import { useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { usePage } from '@inertiajs/vue3';

const form = useForm({
    id: '',
    titulo_tarea: '',
    descripcion_tarea: '',
    puntos: 1,
    tipo_id: null,
    categoria_id: null,
});

defineProps({
    categorias: Array,
    tipos: Array,
});

onMounted(async () => {
    const page = usePage();
    if (page.props.tareas.id) {
        const tarea = page.props.tareas;
        form.id = page.props.tareas.id;
        form.titulo_tarea = page.props.tareas.titulo_tarea;
        form.descripcion_tarea = page.props.tareas.descripcion_tarea;
        form.tipo_id = page.props.tareas.tipo.id;
        form.categoria_id = page.props.tareas.categoria.id;
        form.puntos = tarea.puntos;
    }
});

</script>

<template>
    <div class="bg-gradient-to-r from-slate-800 to-gray-600 min-h-screen p-8 h-screen justify-center text-center">
        <div class="h-screen/2 flex items-center justify-center">
            <div class="bg-gray-800 backdrop-blur-xl backdrop-opacity-10 shadow-xl rounded pt-6 self-center p-8">
                <h1 class="text-3xl font-semibold text-white mb-6"> Editar Tarea </h1>

                <form @submit.prevent="form.patch('/tareas/' + form.id)">
                    <div>
                        <label for="titulo_tarea" class="font-semibold text-white">Titulo Tarea</label><br>
                        <input type="text" v-model="form.titulo_tarea" placeholder="Titulo" id="titulo_tarea" class="placeholder:text-center bg-Amber border-2 rounded-lg p-2 text-center"/>
                        <div v-if="form.errors.titulo_tarea" class="font-semibold text-red-600">
                            {{ form.errors.titulo_tarea }}
                        </div><br><br>
                    </div>

                    <div>
                        <label for="descripcion_tarea" class="font-semibold text-white">Descripción de la tarea</label><br>
                        <input type="text" v-model="form.descripcion_tarea" placeholder="Descripción" id="descripcion_tarea" class="placeholder:text-center bg-Amber border-2 rounded-lg p-2 text-center"/>
                        <div v-if="form.errors.descripcion_tarea" class="font-semibold text-red-600">
                            {{ form.errors.descripcion_tarea }}
                        </div><br><br>
                    </div>

                    <div>
                        <label for="tipo" class="font-semibold text-white">Tipo</label><br>
                        <select v-model="form.tipo_id" id="tipo" class="placeholder:text-center bg-Amber border-2 rounded-lg text-center">
                            <option value="">Selecciona un tipo</option>
                            <option v-for="tipo in tipos" :key="tipo.id" :value="tipo.id" v-bind:selected="tipo.id === form.tipo_id">
                                {{ tipo.tipo }}
                            </option>
                        </select>
                        <br><br>
                    </div>

                    <div>
                        <label for="categoria" class="font-semibold text-white">Categoria</label><br>
                        <select v-model="form.categoria_id" id="categoria" class="placeholder:text-center bg-Amber border-2 rounded-lg p-2 text-center">
                            <option value="">Selecciona una categoria</option>
                            <option v-for="categoria in categorias" :key="categoria.id" :value="categoria.id">
                                {{ categoria.categoria }}
                            </option>
                        </select><br><br>
                    </div>

                    <div>
                        <label for="puntos" class="font-semibold text-white">Puntos</label><br>
                        <input type="number" v-model="form.puntos" placeholder="Puntos" id="puntos" class="placeholder:text-center bg-Amber border-2 rounded-lg p-2 text-center"/>
                        <div v-if="form.errors.puntos"  class="font-semibold text-red-600">
                            {{ form.errors.puntos }}
                        </div><br><br>
                    </div>
                    <button type="submit" :disabled="form.processing" class="bg-blue-600 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">Actualizar tarea</button>
                </form>
            </div>
        </div>
    </div>
</template>
