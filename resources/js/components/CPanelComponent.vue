<script setup>
    import { defineProps } from 'vue';

    const props = defineProps({
        modules: Array
    });

</script>

<template>
    <div class="container text-white">
        <div id="panel">
            <div v-for="m in props.modules">
                <button :class="['btn', 'btn-primary', 'btn-lg', 'm-2', 'p-4', 'stl-'+m.id]" :title="m.name">
                    <span>
                        <!-- {{ m.name }} -->
                    </span>
                    <i class="material-icons">
                        {{ m.icon }}
                    </i>
                </button>
            </div>
        </div>
    </div>
</template>

<style>

#panel
{
    display: grid;
    grid-template-columns: 10% 10% 10% 10%;
    justify-content: center;
}

@media (max-width: 500px) {
    #panel
    {
        display: grid;
        grid-template-columns: 20% 20%;
    }
}

.stl-1
{
    background: #327be0;
}

.stl-2
{
    background: #e09a32;
    border: #e09a32;
}

.stl-2:hover
{
    background: #cf891f;
    border: #cf891f;
}

.stl-3
{
    background: #32e080;
    border: #32e080;
}

.stl-3:hover
{
    background: #0dd366;
    border: #0dd366;
}

.stl-4
{
    background: #e032a6;
    border: #e032a6;
}

.stl-4:hover
{
    background: #d40890;
    border: #d40890;
}

.stl-5
{
    background: #e0573e;
    border: #e0573e;
}

.stl-5:hover
{
    background: #dd3517;
    border: #dd3517;
}

.stl-6
{
    background: #3498c7;
    border: #3498c7;
}

.stl-6:hover
{
    background: #0c81b8;
    border: #0c81b8;
}

.stl-7
{
    background: #c73e34;
    border: #c73e34;
}

.stl-7:hover
{
    background: #c41c10;
    border: #c41c10;
}

.stl-8
{
    background: #bdc734;
    border: #bdc734;
}

.stl-8:hover
{
    background: #b9c50a;
    border: #b9c50a;
}
</style>