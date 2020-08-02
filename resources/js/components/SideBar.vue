<template>
    <div class="sidebarContainer" v-bind:style="{right:isB}">
        <button type="button" class="toggle-collapse" id="toggle-button" v-on:click="myFunction"  v-bind:class="{'show': isA}" >
            <span class="toggle-icon"></span>
        </button>
        <div class="ul-side">
            <li class="ul-item"><a class="site-name" href="">Site Name</a></li>
            <li class="ul-item"><a class="ul-link" href="">Home</a></li>
            <li class="ul-item"><a class="ul-link" href="">Blog</a></li>
            <li class="ul-item"><a class="ul-link" href="">Contact Us</a></li>
            <li class="ul-item">
                <a class="ul-link" href=""><i class="fa fa-facebook"></i></a>
                <a class="ul-link" href=""> <i class="fa fa-twitter"></i></a>
                <a class="ul-link" href=""><i class="fa fa-instagram"></i></a>
                <a class="ul-link" href=""> <i class="fa fa-telegram"></i></a>
            </li>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                isA: false,
                isB: "0px"

            }
        },
        methods: {
            myFunction: function () {
                if (this.isA === false) {
                    this.isA = true;
                    this.isB = "-260px";
                }
                else {
                    this.isA = false;
                    this.isB = "0px";
                }


            }

        }

    }
</script>

<style scoped>
    .sidebarContainer{
        position: absolute;
        float: right;
        width: 260px;
        height: 100%;
        background-color: #12929a;

        text-align: center;
        transition: 0.800s ease;
    }
    .sidebarContainer > .ul-side{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .ul-item{
        display: flex;
    }
    .ul-item > .ul-link{
        text-decoration: none;
        color: cornsilk;
        font-size: 1.1em;
        padding: 1em;
        flex: 1;
    }
    .ul-item > .ul-link:hover{
        background-color: cornsilk;
        color: black;
    }
    .toggle-collapse{
        float: left;
        margin-left: -3.3em;
        margin-top: .5em;
        content: "";
        outline: inherit;
        border: 0px;
        background: transparent;
    }
    .toggle-icon,
    .toggle-icon::before,
    .toggle-icon::after{
        content: "";
        width: 30px;
        height: 3px;
        position: fixed;
        background-color: black;
        border-radius: 2em;
        border: 1px solid black;
        cursor: pointer;
        transition: 0.800s ease;
        margin-top: 0.8em;

    }
    .toggle-icon::before{
        position: absolute;
        left: -1px;
        margin-top: -0.8em;
    }
    .toggle-icon::after{
        position: absolute;
        left: -1px;
        margin-top:0.6em;
        width: 20px;
    }
    .toggle-icon{
        width: 15px;
    }
    .show .toggle-icon::after{
        width: 30px;
    }
    .show .toggle-icon{
        width: 30px;
    }
    .ul-item > .site-name{
        text-decoration: none;
        padding: 1.3em;
        font-size: 2em;
        color: ghostwhite;
        flex: 1;
    }
    .ul-item:last-child > .ul-link i{
        padding: .5em;
    }
    .ul-item:hover:last-child > .ul-link {
        background-color: black;
        color: cornsilk;
    }


</style>