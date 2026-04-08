@extends('frontend.app.app')
@section('main')

    <!-- Hero Section -->
    <section class="hero-section text-white text-center py-5" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=1600') center/cover no-repeat;">
        <div class="container py-5">
            <h1 class="display-4 fw-bold">Trouvez votre bien immobilier idéal</h1>
            <p class="lead mb-4">Maisons, appartements, terrains – l'excellence à votre service depuis 20 ans.</p>
            <a href="biens.html" class="btn btn-primary btn-lg px-5 py-3">Découvrir nos offres</a>
        </div>
    </section>

    <!-- Search Bar Section -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-sm border-0 rounded-4 p-3">
                        <form>
                            <div class="row g-3 align-items-end">
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Type de bien</label>
                                    <select class="form-select">
                                        <option>Maison</option>
                                        <option>Appartement</option>
                                        <option>Terrain</option>
                                        <option>Local commercial</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Ville / Code postal</label>
                                    <input type="text" class="form-control" placeholder="ex: Paris, Lyon">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label fw-semibold">Budget max</label>
                                    <input type="text" class="form-control" placeholder="€">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search"></i> Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Nos biens en vedette</h2>
                <p class="text-muted">Découvrez une sélection de propriétés d'exception</p>
            </div>
            <div class="row g-4">
                <!-- Property 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card property-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="https://picsum.photos/id/104/400/250" class="card-img-top" alt="Villa moderne">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary px-3 py-2">À vendre</span>
                                <span class="text-muted"><i class="fas fa-map-marker-alt"></i> Lyon</span>
                            </div>
                            <h5 class="card-title fw-bold">Villa contemporaine avec piscine</h5>
                            <p class="card-text text-muted">5 chambres • 3 salles de bain • 220 m² • Terrasse</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h4 text-primary mb-0">650 000 €</span>
                                <a href="#" class="btn btn-outline-primary rounded-pill">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Property 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card property-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="https://picsum.photos/id/106/400/250" class="card-img-top" alt="Appartement de luxe">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary px-3 py-2">À vendre</span>
                                <span class="text-muted"><i class="fas fa-map-marker-alt"></i> Paris 16e</span>
                            </div>
                            <h5 class="card-title fw-bold">Appartement haussmannien</h5>
                            <p class="card-text text-muted">3 chambres • 2 sdb • 120 m² • balcon</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h4 text-primary mb-0">890 000 €</span>
                                <a href="#" class="btn btn-outline-primary rounded-pill">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Property 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card property-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="https://picsum.photos/id/15/400/250" class="card-img-top" alt="Maison de campagne">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary px-3 py-2">À vendre</span>
                                <span class="text-muted"><i class="fas fa-map-marker-alt"></i> Bordeaux</span>
                            </div>
                            <h5 class="card-title fw-bold">Maison pierre avec jardin</h5>
                            <p class="card-text text-muted">4 chambres • 2 sdb • 180 m² • terrain 800m²</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h4 text-primary mb-0">495 000 €</span>
                                <a href="#" class="btn btn-outline-primary rounded-pill">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="biens.html" class="btn btn-primary btn-lg">Voir tous nos biens <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Ce que nos clients disent</h2>
                <p class="text-muted">Ils nous ont fait confiance et témoignent</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4">
                        <i class="fas fa-quote-left fa-2x text-primary opacity-50 mb-3"></i>
                        <p>“Une équipe professionnelle et à l'écoute. Ils ont trouvé la maison de nos rêves en moins de deux semaines !”</p>
                        <div class="mt-auto">
                            <h6 class="mb-0">Sophie Martin</h6>
                            <small class="text-muted">Acheteuse, Lyon</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4">
                        <i class="fas fa-quote-left fa-2x text-primary opacity-50 mb-3"></i>
                        <p>“L'estimation de mon bien a été très précise et la vente s'est faite rapidement. Je recommande vivement.”</p>
                        <div class="mt-auto">
                            <h6 class="mb-0">Marc Dubois</h6>
                            <small class="text-muted">Vendeur, Paris</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4">
                        <i class="fas fa-quote-left fa-2x text-primary opacity-50 mb-3"></i>
                        <p>“Un accompagnement personnalisé et des biens de qualité. Merci à toute l'équipe Elite Immo !”</p>
                        <div class="mt-auto">
                            <h6 class="mb-0">Julie Bernard</h6>
                            <small class="text-muted">Locataire, Bordeaux</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
