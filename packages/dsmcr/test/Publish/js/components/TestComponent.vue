<template>
    <v-container>
        <v-text-field outlined label="Test" v-model="field"></v-text-field>
        {{ field }}
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            field: ""
        }
    },
    mounted() {
        console.log("Here");
    }
}
</script>