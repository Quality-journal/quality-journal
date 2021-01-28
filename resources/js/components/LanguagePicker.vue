<template>
    <div>
        <select v-model="selectedPerson">
                <option v-for="person in people" :value="person.key">{{person.name}}</option>
        </select>
    </div>
</template>

<script>
    export default {

    }
</script>
