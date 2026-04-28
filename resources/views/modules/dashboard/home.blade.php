@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <!-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav> -->
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Infracciones</h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>{{ 30 }}</h6>
                                <span class="text-muted small pt-2 ps-1">Total registrados</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Oficiales</h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>{{ 14 }}</h6>
                                <span class="text-muted small pt-2 ps-1">Total registrados</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Tipos de Infracciones</h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h6>{{ 23 }}</h6>
                                <span class="text-muted small pt-2 ps-1">Total registrados</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6" Style="text-align: center;">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Infracciones de Hoy</h5>
                        <div class="d-flex justify-content-center">
                            <div class="ps-3">
                                <h6>{{ 7 }}</h6>
                                <span class="text-muted small pt-2 ps-1">Registradas hoy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tipos de Infracciones Más Comunes</h5>
                        <div id="dashboardBarChart" style="min-height: 400px;" class="echart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Histórico Semanal de Infracciones</h5>
                        <div id="historicoLineChart" style="min-height: 300px;" class="echart"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reincidentes</h5>
                        <div id="reincidentesBarChart" style="min-height: 300px;" class="echart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Gráfica de barras comparativa
        const chart = echarts.init(document.querySelector('#dashboardBarChart'));
        chart.setOption({
            tooltip: {
                trigger: 'axis',
                axisPointer: { type: 'shadow' }
            },
            xAxis: {
                type: 'category',
                data: ['Indocumentado', 'Sin dispositivos de seguridad', 'Comparativa de registros']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [45, 32, 18],
                type: 'bar',
                itemStyle: {
                    color: '#4154f1'
                }
            }]
        });
        window.addEventListener('resize', () => chart.resize());

        // Gráfica de líneas histórico semanal
        const lineChart = echarts.init(document.querySelector('#historicoLineChart'));
        lineChart.setOption({
            tooltip: {
                trigger: 'axis'
            },
            xAxis: {
                type: 'category',
                data: @json($historicoSemanal['labels'])
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: @json($historicoSemanal['data']),
                type: 'line',
                smooth: true,
                itemStyle: {
                    color: '#2eca6a'
                }
            }]
        });
        window.addEventListener('resize', () => lineChart.resize());

        // Gráfica de barras reincidentes
        const reincidentesChart = echarts.init(document.querySelector('#reincidentesBarChart'));
        reincidentesChart.setOption({
            tooltip: {
                trigger: 'axis',
                axisPointer: { type: 'shadow' }
            },
            xAxis: {
                type: 'category',
                data: @json($reincidentes['labels'])
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: @json($reincidentes['data']),
                type: 'bar',
                itemStyle: {
                    color: '#ff771d'
                }
            }]
        });
        window.addEventListener('resize', () => reincidentesChart.resize());
    });
</script>
@endpush