<template>

<div id="flex" class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-6">
<div class="my-4 mx-5 py-4 border-b-2 text-2xl font-semibold">Journal Metrics</div>
<div id="flex" class="flex flex-wrap">
   <div class="mx-2 my-2 flex-grow-0">
        <div class="circlea mx-2 my-2 flex-grow-0"><div class="span text-4xl font-bold text-center">10</div></div>
        <div class="metric-text font-bold text-base">Journal 2015</div> 
    </div>
     <div class="mx-2 my-2 flex-grow-0">
        <div class="circlea mx-2 my-2 flex-grow-0"><div class="span text-4xl font-bold text-center">10</div></div>
        <div class="metric-text font-bold text-base">Journal 2016</div> 
    </div>
     <div class="mx-2 my-2 flex-grow-0">
        <div class="circlea mx-2 my-2 flex-grow-0"><div class="span text-4xl font-bold text-center">10</div></div>
        <div class="metric-text font-bold text-base">Journal 2017</div> 
    </div>
     <div class="mx-2 my-2 flex-grow-0">
        <div class="circlea mx-2 my-2 flex-grow-0"><div class="span text-4xl font-bold text-center">10</div></div>
        <div class="metric-text font-bold text-base">Journal 2018</div> 
    </div>
     <div class="mx-2 my-2 flex-grow-0">
        <div class="circlea mx-2 my-2 flex-grow-0"><div class="span text-4xl font-bold text-center">10</div></div>
        <div class="metric-text font-bold text-base">Journal 2019</div> 
    </div>
    <div class="mx-2 my-2 flex-grow-0">
        <div class="circlea mx-2 my-2 flex-grow-0"><div class="span text-4xl font-bold text-center">10</div></div>
        <div class="metric-text font-bold text-base">Journal 2020</div> 
    </div>
</div>
</div>

</template>

<script>
    export default {
 
    };
</script>

<style scoped>

#flex{
    justify-content:space-between;
}
.circlea{
    border-radius:50%;
    height:100px; 
    width:100px;
    background: #3b82f6;
    opacity: 1;
    text-align: center;
    line-height: 110px;
    
}
.span{
    display:inline-block;
    color:bisque;
    margin: auto;
    width: 100%;
    text-align: center;
}

.metric-text{
    margin: auto;
    width: 100%;
    text-align: center;
}

@media only screen and (max-width: 600px) {
    #flex {
        justify-content:space-evenly;
    }
}

</style>