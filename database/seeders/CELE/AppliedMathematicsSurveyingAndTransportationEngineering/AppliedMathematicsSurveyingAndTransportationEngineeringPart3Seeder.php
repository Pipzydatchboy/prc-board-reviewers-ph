<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

$batch = [
    //1
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'What is the radius of curvature for a vertical curve if the rate of change of gradient is 4% and design speed is 80 km/h for SSD?',
        'choices'    => json_encode([
            '400 m',
            '200 m',
            '600 m',
            '800 m',
        ]),
        'answer'     => '400 m',
        'explanation'=> 'SSD ≈ V^2/(254*(f + g)) gives R=V^2/(127*A) with A=0.04 ⇒ R≈(80^2)/(127*0.04)≈400 m.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'In least squares regression of a survey traverse, the weight matrix typically uses what as weights?',
        'choices'    => json_encode([
            'Inverse of measurement variances',
            'Length of traverse leg',
            'Bearing of traverse leg',
            'Station number',
        ]),
        'answer'     => 'Inverse of measurement variances',
        'explanation'=> 'Weights ∝1/σ² assign more confidence to measurements with lower variance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which numerical method is most suitable for solving stiff ordinary differential equations in engineering models?',
        'choices'    => json_encode([
            'Backward Euler method',
            'Runge-Kutta 4th order',
            'Euler’s forward method',
            'Midpoint rule',
        ]),
        'answer'     => 'Backward Euler method',
        'explanation'=> 'Implicit methods like Backward Euler handle stiffness with better stability than explicit RK.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'In total station surveying, which coordinate transformation is used to convert from instrument to ground coordinates?',
        'choices'    => json_encode([
            'Helmert transformation',
            'Gauss-Krüger projection',
            'Affine transformation',
            'Polar coordinate conversion',
        ]),
        'answer'     => 'Helmert transformation',
        'explanation'=> 'The 7-parameter Helmert (similarity) transformation aligns local to global coordinate frames.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which optimization problem type does the Branch and Bound algorithm solve?',
        'choices'    => json_encode([
            'Integer programming',
            'Nonlinear programming',
            'Dynamic programming',
            'Linear programming',
        ]),
        'answer'     => 'Integer programming',
        'explanation'=> 'Branch and Bound systematically explores discrete solution spaces in IP problems.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'What is the convergence criterion for the Newton-Raphson method when solving f(x)=0?',
        'choices'    => json_encode([
            '|f(x_{n+1})| < tolerance',
            '|x_{n+1}-x_n| > tolerance',
            '|f\'(x_n)| > 1',
            'Number of iterations > max',
        ]),
        'answer'     => '|f(x_{n+1})| < tolerance',
        'explanation'=> 'Iteration stops when residual at new estimate is sufficiently small.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'In three-point resection in plane table survey, which rule is applied?',
        'choices'    => json_encode([
            'Bessel’s method',
            'Gauss-Newton',
            'Compass rule',
            'Bowditch rule',
        ]),
        'answer'     => 'Bessel’s method',
        'explanation'=> 'Bessel’s method uses three known points to orient the table by bisecting angles equiangularly.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which integral transform is used to solve boundary value problems in heat conduction?',
        'choices'    => json_encode([
            'Laplace transform',
            'Fourier series',
            'Z-transform',
            'Hilbert transform',
        ]),
        'answer'     => 'Laplace transform',
        'explanation'=> 'Laplace reduces PDEs in time to ODEs in space for transient heat conduction solutions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'In bearing observation, the whole circle bearing of a line ABC equals the sum of the forward bearing of AB and what?',
        'choices'    => json_encode([
            'Included angle ABC',
            'Back bearing of AB',
            'Declination',
            'Magnetic variation',
        ]),
        'answer'     => 'Included angle ABC',
        'explanation'=> 'Forward bearing of AB plus interior angle at B gives forward bearing of BC.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which method is used to solve large systems of linear equations in structural analysis?',
        'choices'    => json_encode([
            'Gauss-Seidel iteration',
            'Newton-Raphson',
            'Runge-Kutta',
            'Euler’s method',
        ]),
        'answer'     => 'Gauss-Seidel iteration',
        'explanation'=> 'Iterative solver suitable for sparse stiffness matrices in finite element analysis.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'In transportation planning, the four-step model includes trip generation, distribution, mode choice, and what?',
        'choices'    => json_encode([
            'Route assignment',
            'Network coding',
            'Land use analysis',
            'Demand forecasting',
        ]),
        'answer'     => 'Route assignment',
        'explanation'=> 'Fourth step allocates trips across network links to evaluate link flows.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which matrix order arises in a 2D finite difference discretization of Poisson’s equation on an N×N grid?',
        'choices'    => json_encode([
            '(N-1)^2 × (N-1)^2',
            'N^2 × N^2',
            '(N+1)^2 × (N+1)^2',
            '2N × 2N',
        ]),
        'answer'     => '(N-1)^2 × (N-1)^2',
        'explanation'=> 'Interior unknowns count = (N-1)^2 leading to system of that order.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'What is the primary advantage of using the Method of Characteristics in open channel flow analysis?',
        'choices'    => json_encode([
            'Solves unsteady flow by transforming PDEs to ODEs',
            'Analytical solution for uniform flow',
            'Simplifies steady flow calculation',
            'Eliminates friction losses',
        ]),
        'answer'     => 'Solves unsteady flow by transforming PDEs to ODEs',
        'explanation'=> 'MOC traces wave propagation by characteristic lines reducing PDE complexity.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'In time series analysis of traffic data, which component represents cyclical variations?',
        'choices'    => json_encode([
            'Trend-cycle component',
            'Seasonal component',
            'Random component',
            'Noise component',
        ]),
        'answer'     => 'Trend-cycle component',
        'explanation'=> 'Trend-cycle captures long-term and cyclical shifts in data over years.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which statistical test compares means of two independent samples for difference?',
        'choices'    => json_encode([
            'Student’s t-test',
            'Chi-square test',
            'ANOVA',
            'F-test',
        ]),
        'answer'     => 'Student’s t-test',
        'explanation'=> 't-test assesses if sample means differ significantly under normal distribution.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'What does the dispersion parameter k represent in a negative binomial distribution for count data?',
        'choices'    => json_encode([
            'Variance greater than mean',
            'Probability of success',
            'Mean number of events',
            'Trial size',
        ]),
        'answer'     => 'Variance greater than mean',
        'explanation'=> 'k models overdispersion: smaller k yields larger variance relative to mean.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which survey control network adjustment uses both angular and distance measurements in a unified solution?',
        'choices'    => json_encode([
            'Combined adjustment',
            'Angular only adjustment',
            'Linear least squares',
            'Bowditch rule',
        ]),
        'answer'     => 'Combined adjustment',
        'explanation'=> 'In combined adjustment, both angles and distances are adjusted simultaneously for optimal fit.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which queuing discipline services customers in order of arrival?',
        'choices'    => json_encode([
            'FIFO',
            'LIFO',
            'Priority queue',
            'Random order',
        ]),
        'answer'     => 'FIFO',
        'explanation'=> 'First-In-First-Out ensures fairness by serving oldest arrival first.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'In transition curve design, which parameter defines the rate of change of curvature?',
        'choices'    => json_encode([
            'Clothoid constant A',
            'Curve radius R',
            'Superelevation e',
            'Side friction f',
        ]),
        'answer'     => 'Clothoid constant A',
        'explanation'=> 'A determines how quickly curvature increases along a spiral (R varies linearly).',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 3,
        'question'   => 'Which statistical metric measures central tendency that is least affected by outliers?',
        'choices'    => json_encode([
            'Median',
            'Mean',
            'Mode',
            'Range',
        ]),
        'answer'     => 'Median',
        'explanation'=> 'Median is robust central measure unaffected by extreme values.',
        'created_at' => $now,
        'updated_at' => $now
    ],
];



        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
