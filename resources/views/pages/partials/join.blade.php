<div class="container">
    <div class=" ">
        <ul class="nav registerLi">
            <li>
                <a data-toggle="tab" href="#tab1" class="active">Register</a>
            </li>
            <span class="mx-1">|</span>
            <li>
                <a data-toggle="tab" href="#tab2">login</a>
            </li>
        </ul>
    </div>
    <div class="py-3 tab-content">
        <div class="tab-pane active" id="tab1">
          @include('auth.register')
        </div>

        <div class="tab-pane" id="tab2">
            @include('auth.login')
        </div>
    </div>
</div>



