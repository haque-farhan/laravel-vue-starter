<template>
    <div>
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <transition name="slide-fade" mode="out-in">
                        <router-view></router-view>
                    </transition>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.slide-fade-enter-active,
.slide-fade-leave-active {
    transition: opacity 0.1s, transform 0.2s;
}

.slide-fade-enter,
.slide-fade-leave-active {
    opacity: 0;
    transform: translateX(20px);
}
.router-link-exact-active,
.router-link-active {
    background: #3c8dbc !important;
    color: white;
    border-left: 3px solid;
}
</style>
