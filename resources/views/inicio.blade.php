<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobach 35</title>

    <style scoped>
     .menu-top {
       position: fixed;
       top: 0;
       left: 0;
       width: 100%;
       z-index: 1000;
     }
     
     .horizontal-menu {
       list-style-type: none;
       padding: 0;
       margin: 0;
       display: flex;
     }
     
     nav a {
       text-decoration: none;
       color: white;
     }
     .horizontal-menu > li {
       margin-right: 20px;
       position: relative;
       color: var(--menu-text-color);
     }
     
     .sub-menu {
       display: none;
       background-color: var(--menu-background-color);
       min-width: 160px;
       z-index: 1;
       position: absolute;
       top: 100%;
       left: 0;
     }
     
     .horizontal-menu li:hover .sub-menu {
       display: block;
     }
     
     .sub-menu li {
       display: block;
     }
     
     @media (prefers-color-scheme: light) {
       :root {
         --menu-text-color: black;
         --menu-background-color: #f9f9f9;
       }
     }
     
     @media (prefers-color-scheme: dark) {
       :root {
         --menu-text-color: white;
         --menu-background-color: #333;
       }
     }
     </style>
     


   </head>
  <body>
   <div style="
          background-color: #1468a8;
          height: 100px;
          color:white;
          display: flex;
          align-items: center;
          height: 100px;">
      <img src="assets/logo.webp" width="218px" height="89px"  style="display: inline;">
      <ul class="horizontal-menu"  style=" ">
       @foreach ($menu as $item)
        {{ $item->nombre }}
   
   {{--
    
        @if ($item['seccion']['visible']!=0)
        <li>
         <a href="#">{{ $item['seccion']['nombre']}}</a>
        </li>         
        @endif
   --}}
        @endforeach
   
   {{-- 
       <li v-for="item in menu" :key="item.seccion.id" @mouseover="showSubMenu(item)" >
         <router-link  v-if="item.seccion.visible!=0" :to="{ name:  link(item.seccion.tipo) , params: { numero: item.seccion.contenido_id } }">{{ item.seccion.nombre }}</router-link>
         <ul v-if="item.showSub" class="sub-menu" @mouseleave="hideSubMenu(item)" style="background-color: #1468a8;">
           <li v-for="subItem in item.subsecciones" :key="subItem.id">
             <router-link v-if="subItem.visible!=0" :to="{ name: link(subItem.tipo), params: { numero: subItem.contenido_id } }">{{ subItem.nombre }}</router-link>            
           </li>
         </ul>
       </li>
       
   
    --}}
     </ul>
   
     </div>

  <div>
   contenido
  </div>
  </body>
</html>
