<div class="installer-progress">
    <ul class="progress-list">
        <li @if(request()->routeIs('install.init')) class="active" @endif >
            <a href="javascript:void(0)">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" ><g><circle cx="377" cy="377" r="120" style="stroke-width:30;stroke-miterlimit:10;" fill="none"  stroke-width="30" stroke-miterlimit="10" data-original="#000000"></circle><path d="M377 302v30M377 437v-60h-30M347 437h60M75 61v30M15 15h422v122H15zM75 182v30M437 137v136.054M15 257V137M75 302v30M135 61v30M135 182v30M135 302v30M257.002 377H15V257h422" style="stroke-width:30;stroke-miterlimit:10;" fill="none"  stroke-width="30" stroke-miterlimit="10" data-original="#000000"></path></g></svg>
                </div>
                <div class="content">
                    <h6>{{trans("default.init_title")}}</h6>
                    <p>{{trans("default.init_note")}}</p>
                </div>
            </a>
        </li>

        <li @if(request()->routeIs('install.requirement.verification')) class="active" @endif >
            <a href="javascript:void(0)">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" ><g><path d="M18 24a.502.502 0 0 1-.194-.039C17.568 23.86 12 21.454 12 16.536v-4.179a.5.5 0 0 1 .34-.474l5.5-1.857a.5.5 0 0 1 .32 0l5.5 1.857a.5.5 0 0 1 .34.474v4.179c0 4.918-5.568 7.324-5.806 7.425A.502.502 0 0 1 18 24zm-5-11.283v3.819c0 3.784 4.055 5.958 5 6.413.944-.456 5-2.639 5-6.413v-3.819l-5-1.689z"  opacity="1" data-original="#000000" ></path><path d="m17.5 19-.027-.001a.496.496 0 0 1-.363-.187l-2-2.5a.5.5 0 0 1 .781-.625l1.65 2.063 3.105-3.104a.5.5 0 0 1 .707.707l-3.5 3.5A.498.498 0 0 1 17.5 19zM9.5 21h-7A2.502 2.502 0 0 1 0 18.5v-13C0 4.121 1.121 3 2.5 3h2a.5.5 0 0 1 0 1h-2C1.673 4 1 4.673 1 5.5v13c0 .827.673 1.5 1.5 1.5h7a.5.5 0 0 1 0 1zM16.5 8.5A.5.5 0 0 1 16 8V5.5c0-.827-.673-1.5-1.5-1.5h-2a.5.5 0 0 1 0-1h2C15.879 3 17 4.121 17 5.5V8a.5.5 0 0 1-.5.5z"  opacity="1" data-original="#000000" ></path><path d="M11.5 6h-6C4.673 6 4 5.327 4 4.5v-2a.5.5 0 0 1 .5-.5h1.55C6.282.86 7.293 0 8.5 0s2.218.86 2.45 2h1.55a.5.5 0 0 1 .5.5v2c0 .827-.673 1.5-1.5 1.5zM5 3v1.5c0 .275.225.5.5.5h6c.275 0 .5-.225.5-.5V3h-1.5a.5.5 0 0 1-.5-.5C10 1.673 9.327 1 8.5 1S7 1.673 7 2.5a.5.5 0 0 1-.5.5zM13.5 9h-10a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1zM9.5 12h-6a.5.5 0 0 1 0-1h6a.5.5 0 0 1 0 1zM9.5 15h-6a.5.5 0 0 1 0-1h6a.5.5 0 0 1 0 1z"  opacity="1" data-original="#000000" ></path></g></svg>
                </div>
                <div class="content">
                    <h6>{{trans("default.requirments_title")}}</h6>
                    <p>{{trans("default.requirments_note")}}</p>
                </div>
            </a>
        </li>
        

        
        <li @if(request()->routeIs('install.db.setup')) class="active" @endif>
            <a href="javascript:void(0)">
                <div class="icon">
                 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" ><g><path d="m503.927 362.99-20.438-5.115 10.833-18.063a10.667 10.667 0 0 0-1.604-13.031l-23.385-23.385V74.667C469.333 25.646 351.281 0 234.667 0S0 25.646 0 74.667v320c0 49.021 118.052 74.667 234.667 74.667 21.788 0 43.871-1.07 65.746-2.983l26.368 26.368c3.448 3.438 8.802 4.115 13.031 1.604l18.063-10.833 5.115 20.438a10.665 10.665 0 0 0 10.344 8.073H416c4.896 0 9.156-3.333 10.344-8.073l5.115-20.438 18.063 10.833a10.667 10.667 0 0 0 13.031-1.604l30.167-30.167a10.667 10.667 0 0 0 1.604-13.031l-10.833-18.063 20.438-5.115a10.665 10.665 0 0 0 8.073-10.344v-42.667a10.667 10.667 0 0 0-8.075-10.342zM234.667 21.333C364.896 21.333 448 52.917 448 74.667S364.896 128 234.667 128 21.333 96.417 21.333 74.667s83.105-53.334 213.334-53.334zM21.333 107.682c39.161 27.44 126.6 41.651 213.333 41.651S408.839 135.122 448 107.682v73.651c0 21.75-83.104 53.333-213.333 53.333S21.333 203.083 21.333 181.333v-73.651zm0 106.667C60.495 241.789 147.934 256 234.667 256S408.839 241.789 448 214.349v81.574l-16.542 9.921-5.115-20.438a10.665 10.665 0 0 0-10.344-8.073h-42.667a10.665 10.665 0 0 0-10.344 8.073l-5.115 20.438-18.063-10.833c-4.208-2.51-9.583-1.865-13.031 1.604l-30.167 30.167c-3.418 3.418-4.056 8.697-1.638 12.871-19.173 1.087-43.039 1.681-60.31 1.681-130.229 0-213.333-31.583-213.333-53.333v-73.652zm276.289 230.818c-20.957 1.805-42.096 2.833-62.956 2.833-130.229 0-213.333-31.583-213.333-53.333v-73.651c39.161 27.44 126.6 41.651 213.333 41.651 16.444 0 39.042-.509 57.984-1.491l-7.245 1.814a10.665 10.665 0 0 0-8.073 10.344V416c0 4.896 3.333 9.156 8.073 10.344l20.438 5.115-8.221 13.708zm193.045-37.49-18.323 4.583a10.645 10.645 0 0 0-7.479 6.823c-.948 2.729-1.99 5.396-3.25 7.979a10.685 10.685 0 0 0 .448 10.156l9.688 16.135-18.396 18.396-16.135-9.688a10.6 10.6 0 0 0-10.156-.448c-2.583 1.26-5.25 2.302-7.979 3.25a10.647 10.647 0 0 0-6.823 7.479l-4.583 18.323h-26.021l-4.583-18.323a10.645 10.645 0 0 0-6.823-7.479c-2.729-.948-5.396-1.99-7.979-3.25a10.626 10.626 0 0 0-10.156.448l-16.135 9.688-18.396-18.396 9.688-16.135a10.685 10.685 0 0 0 .448-10.156c-1.26-2.583-2.302-5.25-3.25-7.979a10.647 10.647 0 0 0-7.479-6.823l-18.323-4.583v-26.021l18.323-4.583a10.645 10.645 0 0 0 7.479-6.823c.948-2.729 1.99-5.396 3.25-7.979a10.685 10.685 0 0 0-.448-10.156l-9.688-16.135 18.396-18.396 16.135 9.688a10.708 10.708 0 0 0 10.156.448c2.583-1.26 5.25-2.302 7.979-3.25 3.396-1.188 5.958-4 6.823-7.479l4.583-18.323h26.021l4.583 18.323a10.645 10.645 0 0 0 6.823 7.479c2.729.948 5.396 1.99 7.979 3.25 3.26 1.583 7.052 1.396 10.156-.448l16.135-9.688 18.396 18.396-9.688 16.135a10.685 10.685 0 0 0-.448 10.156c1.26 2.583 2.302 5.25 3.25 7.979 1.188 3.396 4 5.958 7.479 6.823l18.323 4.583v26.021z"  opacity="1" data-original="#000000"></path><path d="M394.667 341.333c-29.406 0-53.333 23.927-53.333 53.333S365.26 448 394.667 448 448 424.073 448 394.667s-23.927-53.334-53.333-53.334zm0 85.334c-17.646 0-32-14.354-32-32s14.354-32 32-32 32 14.354 32 32-14.354 32-32 32z"  opacity="1" data-original="#000000"></path></g></svg>
                </div>
                <div class="content">
                    <h6>{{trans("default.dbsetup_title")}}</h6>
                    <p> {{trans("default.dbsetup_note")}}</p>
                </div>
            </a>
        </li>

        <li @if(request()->routeIs('install.account.setup')) class="active" @endif>
            <a href="javascript:void(0)">
                <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 56 56" style="enable-background:new 0 0 512 512" xml:space="preserve" ><g><path d="M25.035 23.55c4.968 0 9.326-4.778 9.326-10.224C34.36 8.184 30.177 4 25.035 4s-9.326 4.184-9.326 9.326c0 5.446 4.358 10.225 9.326 10.225zm0-17.55c4.04 0 7.326 3.286 7.326 7.326 0 3.882-3.133 8.225-7.326 8.225s-7.326-4.343-7.326-8.225c0-4.04 3.287-7.326 7.326-7.326zM8.445 42.172h17.568v.033a1 1 0 0 0 .831.985l2.47.424c.09.242.189.481.3.715l-1.445 2.05a1 1 0 0 0 .11 1.283l2.077 2.077a.999.999 0 0 0 1.284.11l2.065-1.457c.226.106.458.2.694.286l.43 2.492a1 1 0 0 0 .985.83h2.945a1 1 0 0 0 .986-.83l.429-2.493c.235-.085.466-.18.694-.285l2.065 1.457c.398.28.94.235 1.284-.11l2.077-2.077a1 1 0 0 0 .11-1.283l-1.444-2.05c.11-.234.21-.473.298-.715l2.466-.424a1 1 0 0 0 .83-.985v-2.946a1 1 0 0 0-.828-.985l-2.436-.422a8.266 8.266 0 0 0-.307-.75l1.422-2.017a1 1 0 0 0-.11-1.282l-2.077-2.083a1 1 0 0 0-1.286-.11l-1.993 1.41a8.312 8.312 0 0 0-.777-.323l-.417-2.409a1 1 0 0 0-.986-.83h-1.427a17.759 17.759 0 0 0-6.952-4.181 1.003 1.003 0 0 0-1.111.363l-4.235 5.798-4.227-5.798a1 1 0 0 0-1.11-.364C12.75 27.475 7.828 33.842 7.447 41.12a1 1 0 0 0 .998 1.052zm30.571-7.74a6.299 6.299 0 0 1 1.498.623.997.997 0 0 0 1.08-.048l1.804-1.277.888.89-1.287 1.824a1 1 0 0 0-.053 1.069c.264.466.468.964.604 1.477a1 1 0 0 0 .796.728l2.209.383v1.26l-2.23.385a1 1 0 0 0-.794.714 6.605 6.605 0 0 1-.608 1.457 1 1 0 0 0 .053 1.068l1.31 1.858-.888.886-1.869-1.319a1 1 0 0 0-1.062-.057 6.575 6.575 0 0 1-1.442.593 1 1 0 0 0-.719.794L37.917 50h-1.26l-.39-2.26a1 1 0 0 0-.719-.794 6.452 6.452 0 0 1-1.437-.59.999.999 0 0 0-1.067.054l-1.87 1.32-.885-.887 1.309-1.858a1 1 0 0 0 .052-1.069 6.517 6.517 0 0 1-.607-1.456 1 1 0 0 0-.794-.714l-2.236-.384v-1.26l2.214-.384a1 1 0 0 0 .796-.727c.137-.514.34-1.012.604-1.479a1 1 0 0 0-.053-1.068l-1.286-1.824.887-.89 1.805 1.277a1 1 0 0 0 1.08.048 6.31 6.31 0 0 1 1.498-.63 1 1 0 0 0 .72-.793l.378-2.174h1.261l.378 2.18a1 1 0 0 0 .721.794zm-19.391-7.018 4.6 6.31a1 1 0 0 0 1.616 0l4.608-6.309c1.62.6 3.142 1.475 4.488 2.575a.989.989 0 0 0-.108.298l-.417 2.405a8.188 8.188 0 0 0-.778.327l-1.993-1.41a1 1 0 0 0-1.286.11l-2.077 2.083a1 1 0 0 0-.11 1.282l1.423 2.017a8.248 8.248 0 0 0-.307.75l-2.441.422a1 1 0 0 0-.83.985v.913h-9.596v-4.246a1 1 0 0 0-2 0v4.246H9.536c.701-5.77 4.622-10.744 10.089-12.758z"  opacity="1" data-original="#000000" ></path><path d="M32.789 40.729a4.5 4.5 0 0 0 4.495 4.496 4.5 4.5 0 0 0 4.495-4.496 4.5 4.5 0 0 0-4.495-4.495 4.5 4.5 0 0 0-4.495 4.495zm6.99 0c0 1.376-1.12 2.496-2.495 2.496s-2.495-1.12-2.495-2.496 1.119-2.495 2.495-2.495 2.495 1.119 2.495 2.495z"  opacity="1" data-original="#000000"></path></g></svg>

                </div>
                <div class="content">
                    <h6>{{trans("default.account_setup_title")}}</h6>
                    <p> {{trans("default.account_setup_note")}}</p>
                </div>
            </a>
        </li>
        
        <li @if(request()->routeIs('install.setup.finished')) class="active" @endif>
            <a href="javascript:void(0)">
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" ><g><path d="M32.016 58.003c-9.888.001-19.006-5.665-23.373-14.583-4.419-9.027-3.081-20.285 3.331-28.014C18.379 7.685 28.792 4.316 38.5 6.823a2.002 2.002 0 0 1-1 3.874c-8.212-2.121-17.026.729-22.447 7.264-5.424 6.539-6.556 16.064-2.817 23.702 3.725 7.608 11.942 12.564 20.376 12.334 8.433-.23 16.086-5.359 19.497-13.066a22.13 22.13 0 0 0 1.192-14.432 2.001 2.001 0 0 1 3.874-1 26.155 26.155 0 0 1-1.407 17.051c-4.032 9.11-13.079 15.173-23.046 15.445-.236.005-.472.008-.706.008z"  opacity="1" data-original="#000000"></path><path d="M32 38.24a2 2 0 0 1-1.414-3.414l24-24a2 2 0 1 1 2.828 2.828l-24 24c-.39.39-.902.586-1.414.586z"  opacity="1" data-original="#000000"></path><path d="M32 38.24a1.99 1.99 0 0 1-1.414-.586l-8.485-8.485a2 2 0 1 1 2.828-2.828l8.485 8.485A2 2 0 0 1 32 38.24z"  opacity="1" data-original="#000000" ></path></g></svg>
                </div>
                <div class="content">
                    <h6>{{trans("default.finished_title")}}</h6>
                    <p> {{trans("default.finished_note")}}</p>
                </div>
            </a>
        </li>
    </ul>
</div>