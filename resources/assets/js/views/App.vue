<template>
    <div class="row">
        <nav class="col text-center mt-3">
            <router-link :to="{ name: 'book' }" class="btn btn-success">QL sách</router-link>
            <router-link :to="{ name: 'author' }" class="btn btn-success">QL tác giả</router-link>
        </nav>
 
        <router-view></router-view>
    </div>
</template>
<script>
    export default {}
</script>