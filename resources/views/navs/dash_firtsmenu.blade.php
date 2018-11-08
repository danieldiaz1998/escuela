         <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-500 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
               <img src="https://getmdl.io/templates/dashboard/images/user.jpg" class="demo-avatar">
               <div class="demo-avatar-dropdown">
                  <span>hello@example.com</span>
                  <div class="mdl-layout-spacer"></div>
                  <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons" role="presentation">arrow_drop_down</i>
                  <span class="visuallyhidden">Accounts</span>
                  </button>
                  <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                     <li class="mdl-menu__item">hello@example.com</li>
                     <li class="mdl-menu__item">info@example.com</li>
                     <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                  </ul>
               </div>
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>

               <a class="mdl-navigation__link @if(Request::url() == url('/home/careers')) active @endif" href="{{ url('/home/careers') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment</i>Carrera</a>
               <a class="mdl-navigation__link @if(Request::url() == url('/home/careers/create')) active @endif" href="{{ url('/home/careers/create') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment</i>Nueva carrera</a>
               <a class="mdl-navigation__link @if(Request::url() == url('/home/subjects')) active @endif" href="{{ url('/home/subjects') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment</i>Materia</a>
               <a class="mdl-navigation__link @if(Request::url() == url('/home/subjects/create')) active @endif" href="{{ url('/home/subjects/create') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment</i>Nueva Materia</a>
               <a class="mdl-navigation__link @if(Request::url() == url('/home/areas')) active @endif" href="{{ url('/home/areas') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment</i>Areas</a>
               <a class="mdl-navigation__link @if(Request::url() == url('/home/areas/create')) active @endif" href="{{ url('/home/areas/create') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment</i>Nueva Area</a>   
               <div class="mdl-layout-spacer"></div>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
            </nav>
         </div>