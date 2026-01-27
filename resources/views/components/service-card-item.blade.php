<div class="new-service-card shadow-sm">
    <div class="floating-icon-wrap">
        <i class="fa-solid fa-handshake"></i>
    </div>
    <div class="card-content-wrapper">
        <h6 class="service-title-text fw-bold mb-3 text-uppercase border-bottom pb-3">
            {{ $service->title }}
        </h6>
        <ul class="service-item-list text-start">
            @foreach ($service->items as $item)
                <li class="mb-2 d-flex align-items-start gap-2">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>{{ $item->name }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>