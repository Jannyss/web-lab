<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1> All docs </h1>
                    <ul>
                        <li
                                v-for="doc in docs"
                                v-bind:key="doc._id">
                            <a href="#" v-on:click="openDoc(doc)">
                                {{doc.title}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <button v-on:click="createDoc()" type="button">Create new doc</button>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Docs",
        props: ["docs", "openDoc", "createDoc"]
    }
</script>

<style scoped>

</style>