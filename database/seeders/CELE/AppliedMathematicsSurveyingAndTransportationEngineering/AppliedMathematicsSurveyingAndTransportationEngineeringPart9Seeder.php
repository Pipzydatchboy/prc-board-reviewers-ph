<?php

namespace Database\Seeders\CELE\AppliedMathematicsSurveyingAndTransportationEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliedMathematicsSurveyingAndTransportationEngineeringPart9Seeder extends Seeder
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
        'part'       => 9,
        'question'   => 'Which method for solving linear systems uses orthogonal projections to minimize residuals?',
        'choices'    => json_encode([
            'Least squares via QR',
            'Gaussian elimination',
            'Jacobi iteration',
            'Conjugate gradient',
        ]),
        'answer'     => 'Least squares via QR',
        'explanation'=> 'QR decomposition projects onto column space to find minimal residual solution.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In route assignment models, which concept distributes trips across multiple paths to equilibrium?',
        'choices'    => json_encode([
            'Wardrop’s user equilibrium',
            'System optimum',
            'Stochastic assignment',
            'Deterministic assignment',
        ]),
        'answer'     => 'Wardrop’s user equilibrium',
        'explanation'=> 'User equilibrium where no driver can reduce travel time by changing routes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which finite element type is most appropriate for plate bending analysis?',
        'choices'    => json_encode([
            'Mindlin plate element',
            'Plane stress element',
            'Axisymmetric element',
            'Beam element',
        ]),
        'answer'     => 'Mindlin plate element',
        'explanation'=> 'Mindlin accounts for shear deformation in thick plates.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In surveying, which device measures small horizontal and vertical angles with high precision?',
        'choices'    => json_encode([
            'Micrometer theodolite',
            'Compass',
            'Auto level',
            'Total station',
        ]),
        'answer'     => 'Micrometer theodolite',
        'explanation'=> 'Provides fine-angle measurement using a micrometer screw.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which hydrologic model uses unit hydrographs to predict runoff?',
        'choices'    => json_encode([
            'Snyder’s synthetic unit hydrograph',
            'Rational method',
            'Manning’s equation',
            'Navier-Stokes model',
        ]),
        'answer'     => 'Snyder’s synthetic unit hydrograph',
        'explanation'=> 'Synthetic UH scaled from basin characteristics to estimate runoff hydrograph.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which method corrects angle observations in triangulation by distributing closure errors proportionally to angles?',
        'choices'    => json_encode([
            'Angular resection',
            'Bowditch rule',
            'Compass rule',
            'Transit rule',
        ]),
        'answer'     => 'Transit rule',
        'explanation'=> 'Distributes angular misclosure equally across all measured angles.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In open channel design, which concept ensures uniform flow if slope equals energy grade line slope?',
        'choices'    => json_encode([
            'Critical flow',
            'Uniform flow',
            'Gradually varied flow',
            'Rapidly varied flow',
        ]),
        'answer'     => 'Uniform flow',
        'explanation'=> 'Uniform flow occurs when gravitational and friction forces balance along channel slope.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which statistical test compares variances of two normally distributed samples?',
        'choices'    => json_encode([
            'F-test',
            't-test',
            'Chi-square test',
            'Z-test',
        ]),
        'answer'     => 'F-test',
        'explanation'=> 'F-test ratio of variances tests equality under normality assumption.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In numerical ODE solvers, which characteristic indicates method’s ability to handle stiff equations?',
        'choices'    => json_encode([
            'A-stability',
            'Consistency',
            'Convergence',
            'Order',
        ]),
        'answer'     => 'A-stability',
        'explanation'=> 'A-stable methods remain stable for all step sizes and stiff problems.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which computational geometry concept divides space into Voronoi regions?',
        'choices'    => json_encode([
            'Voronoi diagram',
            'Delaunay triangulation',
            'Convex hull',
            'KD-tree',
        ]),
        'answer'     => 'Voronoi diagram',
        'explanation'=> 'Partitions plane into regions closest to each generator point.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In signalized intersection analysis, which model uses shockwave theory to estimate queue length?',
        'choices'    => json_encode([
            'HCM queueing model',
            'Webster’s formula',
            'M/M/1 queue',
            'Greenberg model',
        ]),
        'answer'     => 'HCM queueing model',
        'explanation'=> 'Highway Capacity Manual uses kinematic wave theory to model queues.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which element type in FEA is best for modeling beam behavior under bending?',
        'choices'    => json_encode([
            'Beam element',
            'Solid element',
            'Shell element',
            'Plate element',
        ]),
        'answer'     => 'Beam element',
        'explanation'=> 'Beam elements capture bending and axial behavior in one dimension.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //13
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which surveying technique uses infrared targets to measure angles electronically?',
        'choices'    => json_encode([
            'Total station',
            'Theodolite',
            'Auto level',
            'GPS receiver',
        ]),
        'answer'     => 'Total station',
        'explanation'=> 'Infrared EDM and electronic angle encoders enable precise measurements.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In contour mapping, which method traces lines of equal elevation by linear interpolation between points?',
        'choices'    => json_encode([
            'Contour interpolation',
            'Triangulation',
            'Planimeter method',
            'Grid method',
        ]),
        'answer'     => 'Contour interpolation',
        'explanation'=> 'Interpolates between adjacent known elevations to draw contours.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which algorithm in photogrammetry matches homologous points between stereopairs?',
        'choices'    => json_encode([
            'Feature matching',
            'RANSAC',
            'ICP',
            'B-Spline interpolation',
        ]),
        'answer'     => 'Feature matching',
        'explanation'=> 'Detects and matches image features (corners, edges) across stereo images.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In reservoir routing, which method uses mass curve differences to compute storage?',
        'choices'    => json_encode([
            'Level-pool routing',
            'Muskingum method',
            'Kinematic wave routing',
            'Unit hydrograph routing',
        ]),
        'answer'     => 'Level-pool routing',
        'explanation'=> 'Applies continuity and stage-storage relationships to inflow/outflow curves.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which concept in optimization refers to constraints on decision variables?',
        'choices'    => json_encode([
            'Feasible region',
            'Objective function',
            'Gradient',
            'Hessian matrix',
        ]),
        'answer'     => 'Feasible region',
        'explanation'=> 'Set of all points satisfying problem constraints.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In water distribution modeling, which parameter estimates roughness in pipes?',
        'choices'    => json_encode([
            'Manning’s n',
            'Hazen-Williams C',
            'Darcy friction factor',
            'Weber number',
        ]),
        'answer'     => 'Hazen-Williams C',
        'explanation'=> 'Empirical coefficient related to internal pipe roughness.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'Which geodesic distance metric measures shortest path on ellipsoid surface?',
        'choices'    => json_encode([
            'Geodesic distance',
            'Euclidean distance',
            'Manhattan distance',
            'Great-circle distance',
        ]),
        'answer'     => 'Geodesic distance',
        'explanation'=> 'Generalizes great-circle distance accounting for ellipsoidal shape.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 38,
        'part'       => 9,
        'question'   => 'In structural reliability, which index represents safety margin standardized by variability?',
        'choices'    => json_encode([
            'Reliability index β',
            'Factor of safety',
            'Load factor',
            'Resistance factor',
        ]),
        'answer'     => 'Reliability index β',
        'explanation'=> 'β = (mean capacity - mean load)/std dev of difference.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}
