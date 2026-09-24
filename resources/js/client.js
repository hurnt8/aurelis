import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import {
    Chart,
    ArcElement,
    DoughnutController,
    Tooltip,
    Legend,
} from 'chart.js';

// ── Chart.js: register only what we use ────────────────────────
Chart.register(ArcElement, DoughnutController, Tooltip, Legend);

// ── Alpine ─────────────────────────────────────────────────────
Alpine.plugin(intersect);
window.Alpine = Alpine;

// ── Amortisation doughnut helper ────────────────────────────────
window.buildAmortChart = function (canvasId, principal, interest, currency) {
    const ctx = document.getElementById(canvasId);
    if (!ctx) return;

    const fmt = (v) =>
        new Intl.NumberFormat(document.documentElement.lang || 'fr', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 2,
        }).format(v) +
        ' ' +
        currency;

    return new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Capital', 'Intérêts'],
            datasets: [
                {
                    data: [principal, interest],
                    backgroundColor: ['#2A1967', '#65DC50'],
                    borderColor: ['#211450', '#379627'],
                    borderWidth: 2,
                    hoverOffset: 6,
                },
            ],
        },
        options: {
            cutout: '72%',
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#2A1967',
                        font: { family: 'Inter', size: 11, weight: '600' },
                        padding: 16,
                        usePointStyle: true,
                        pointStyleWidth: 8,
                    },
                },
                tooltip: {
                    callbacks: {
                        label: (ctx) => ' ' + fmt(ctx.parsed),
                    },
                    backgroundColor: '#2A1967',
                    borderColor: '#65DC50',
                    borderWidth: 1,
                    titleColor: '#FFFFFF',
                    bodyColor: '#84E373',
                    padding: 10,
                },
            },
        },
    });
};

Alpine.start();
