<template>
    <div class="row">
        <nav class="col">
            <router-link :to="{ name: 'book' }">QL sách</router-link>
            <router-link :to="{ name: 'author' }">QL tác giả</router-link>
        </nav>
 
        <router-view></router-view>
    </div>
</template>
<script>
    export default {}
</script>