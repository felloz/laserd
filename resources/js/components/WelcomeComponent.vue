<template>
    <div>{{ saludo }}</div>
</template>

<script>
export default {
    data() {
        return {
            value: null,
        };
    },
    props: ['saludo'],
};
</script>

<style scoped></style>
