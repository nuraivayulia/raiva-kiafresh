@extends('layouts.admin.app')

@section('content')

    <main class="content">
        <div class="page-header">
            <div>
                <h1>Dashboard Admin</h1>
                <p>Your main content goes here…</p>
            </div>
            <button class="primary-btn" type="button">Export</button>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-inner">
                    <div class="stat-icon bg-blue"><i class="ti ti-report-analytics"></i></div>
                    <div>
                        <h2>Total Sales</h2>
                        <h3>$25,000</h3>
                        <p class="text-success-strong">+5% since last month</p>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-inner">
                    <div class="stat-icon bg-green"><i class="ti ti-repeat"></i></div>
                    <div>
                        <h2>Total Purchase</h2>
                        <h3>$18,000</h3>
                        <p class="text-success-strong">+22% since last month</p>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-inner">
                    <div class="stat-icon bg-cyan"><i class="ti ti-currency-dollar"></i></div>
                    <div>
                        <h2>Total Expenses</h2>
                        <h3>$9,000</h3>
                        <p class="text-info-strong">+10% since last month</p>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-inner">
                    <div class="stat-icon bg-yellow"><i class="ti ti-notes"></i></div>
                    <div>
                        <h2>Invoice Due</h2>
                        <h3>$25,000</h3>
                        <p class="text-warning-strong">+35% since last month</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="summary-grid">
            <div class="summary-card">
                <div class="summary-header">
                    <div>
                        <h3>$25,458</h3>
                        <span>Total Profit</span>
                    </div>
                    <div class="summary-icon bg-blue"><i class="ti ti-chart-area-line"></i></div>
                </div>
                <div class="summary-meta">
                    <div><span class="text-success-strong">+35%</span> vs Last Month</div>
                    <a href="#">View</a>
                </div>
            </div>

            <div class="summary-card">
                <div class="summary-header">
                    <div>
                        <h3>$45,458</h3>
                        <span>Total Payment Returns</span>
                    </div>
                    <div class="summary-icon" style="background: linear-gradient(135deg, #fca5a5, #ef4444);"><i
                            class="ti ti-credit-card"></i></div>
                </div>
                <div class="summary-meta">
                    <div><span style="color: var(--danger);">-20%</span> vs Last Month</div>
                    <a href="#">View</a>
                </div>
            </div>

            <div class="summary-card">
                <div class="summary-header">
                    <div>
                        <h3>$34,458</h3>
                        <span>Total Expenses</span>
                    </div>
                    <div class="summary-icon" style="background: linear-gradient(135deg, #fcd34d, #f59e0b);"><i
                            class="ti ti-cash-banknote"></i></div>
                </div>
                <div class="summary-meta">
                    <div><span class="text-warning-strong">-20%</span> vs Last Month</div>
                    <a href="#">View</a>
                </div>
            </div>
        </div>
    </main>
    {{-- endsection  --}}
