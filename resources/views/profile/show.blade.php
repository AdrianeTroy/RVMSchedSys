<!DOCTYPE html>
<html lang="en">
<head>
    @if (Auth::user()->usertype=='0')
    @include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

@include('user.header')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
@include('user.footer')
@include('user.script')
</body>

@else
<body>
    <div class="container-scroller">
    @include('admin.navbar')  
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{ url()->previous() }}">Back</a>
    </h2>

  
      <div>
          <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
              @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                  @livewire('profile.update-profile-information-form')
  
                  <x-jet-section-border />
              @endif
  
              @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                  <div class="mt-10 sm:mt-0">
                      @livewire('profile.update-password-form')
                  </div>
  
                  <x-jet-section-border />
              @endif
  
              @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                  <div class="mt-10 sm:mt-0">
                      @livewire('profile.two-factor-authentication-form')
                  </div>
  
                  <x-jet-section-border />
              @endif
  
              <div class="mt-10 sm:mt-0">
                  @livewire('profile.logout-other-browser-sessions-form')
              </div>
  
              @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                  <x-jet-section-border />
  
                  <div class="mt-10 sm:mt-0">
                      @livewire('profile.delete-user-form')
                  </div>
              @endif
          </div>
      </div>
  @include('admin.script')
    </div>
  </body>
  @endif
</html>