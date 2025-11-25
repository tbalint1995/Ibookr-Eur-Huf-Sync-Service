<!-- Ezen a helyen egy gomb található a "Szinkronizálás" funkcióhoz -->

<div class="mb-3">
    <button type="button" class="btn btn-warning rounded-4 fs-6 ls-tight">Szinkronizálás</button>
</div>

<!-- Ezen a helyen egy gomb található a "Betöltés" funkcióhoz, mely a betöltés közben vált át a szinkronizálásról -->

<button class="mb-3 btn btn-warning rounded-4 fs-6 ls-tight" type="button">
    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
    Betöltés
</button>

<!-- Ezen a helyen egy figyelmeztető üzenet található "Csak egy munkafolyamat fut" információval, hiszen egyszerre csak egy "job" (munkafolyamat) futtatható. -->

<div class="alert alert-warning max-w-screen-sm" role="alert">
    <div class="d-flex gap-4">
        <span><i class="fa-solid fa-circle-exclamation text-warning"></i></span>
        <div class="d-flex flex-column gap-2">
            <h6 class="mb-0">Egy munkafolyamat fut.</h6>
            <p class="mb-0">Csak egyetlen munkafolyamat futtatása engedélyezett egyszerre.</p>
        </div>
        <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
</div>