

<template>
<div style="over-flow:hidden;">
   <li :class="lol"  class="list-group-item"  ><slot></slot></li>
<small class="badge float-right " :class="badgeClass">{{user}}</small>

</div>
</template>
 
<script>
    export default {

        props:
        [
            'color' ,
            'user'

        ],
        computed:
        {
           
            lol()
            {
                return 'list-group-item-'+this.color;
             },

            badgeClass()
            {
                return 'badge-'+this.color;
             }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
    
</script>
