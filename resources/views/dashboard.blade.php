@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    	<div class="d-flex justify-content-between align-items-center my-3">
        	<h1 class="h3 text-gray-800">Dashboard</h1>
        	<button id="refreshBtn" class="btn-primary">Refresh table</button>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <table id="metricsTable" class="table table-bordered mb-0">
                            	<thead>
                            		<tr>
                            			<th>Platform</th>
                            			<th>Followers</th>
                            			<th>Engagement Rate</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            		@foreach ($metrics as $metric)
	                            		<tr>
	                            			<td>{{ $metric->platform }}</td>
	                            			<td>{{ $metric->followers }}</td>
	                            			<td>{{ $metric->engagement_rate }}</td>
	                            		</tr>
                            		@endforeach
                            	</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const refreshBtn = document.getElementById('refreshBtn');
            const metricsTable = document.getElementById('metricsTable').querySelector('tbody');

            refreshBtn.addEventListener('click', function () {
                axios.get('/api/metrics')
                    .then(response => {
                        const metrics = response.data.data;
                        let html = '';
                        metrics.forEach(metric => {
                            html += `
                                <tr>
                                    <td>${metric.platform}</td>
                                    <td>${metric.followers}</td>
                                    <td>${metric.engagement_rate}</td>
                                </tr>
                            `;
                        });
                        metricsTable.innerHTML = html;
                        return false;
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            });
        });
    </script>
@endsection