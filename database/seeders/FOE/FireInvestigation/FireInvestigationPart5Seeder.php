<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart5Seeder extends Seeder
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
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which indicator on structural steel suggests the fire reached its peak temperature?',
        'choices'     => json_encode([
            'Blue-gray oxidation',
            'Alligatoring of paint',
            'Char on surrounding wood',
            'Pour patterns on floor',
        ]),
        'answer'      => 'Blue-gray oxidation',
        'explanation' => 'At high temperatures steel develops a blue-gray oxide layer indicating peak heat exposure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'What is the MOST important consideration when collecting multilevel debris samples?',
        'choices'     => json_encode([
            'Label each layer separately',
            'Mix layers to average',
            'Collect only top layer',
            'Ignore lower layers',
        ]),
        'answer'      => 'Label each layer separately',
        'explanation' => 'Documenting depth and layer preserves vertical distribution of accelerant or burn residues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which pattern indicates fire traveled through a soffit or concealed space?',
        'choices'     => json_encode([
            'Linear charring along soffit edges',
            'Circular char spots',
            'Uniform floor charring',
            'A-pattern on walls',
        ]),
        'answer'      => 'Linear charring along soffit edges',
        'explanation' => 'Char lines following soffit boundaries reveal hidden fire spread in concealed spaces.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which test determines presence of lead-based paint that may impede pattern analysis?',
        'choices'     => json_encode([
            'X-ray fluorescence',
            'pH strip',
            'Thermal imager',
            'Moisture meter',
        ]),
        'answer'      => 'X-ray fluorescence',
        'explanation' => 'XRF rapidly identifies lead in old paint layers which can affect char depth readings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which documentation ensures accurate mapping of fire vent locations?',
        'choices'     => json_encode([
            'Detailed scene sketch with coordinates',
            'Photograph captions only',
            'Witness statements',
            'Flow test report',
        ]),
        'answer'      => 'Detailed scene sketch with coordinates',
        'explanation' => 'Sketches with dimensions allow precise relocation of vents and openings on plan view.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which fungal growth on debris may obscure fire patterns if not documented promptly?',
        'choices'     => json_encode([
            'Mold colonies in humid conditions',
            'Rust on steel',
            'Ash residue',
            'Insect frass',
        ]),
        'answer'      => 'Mold colonies in humid conditions',
        'explanation' => 'Biological growth can quickly obscure char patterns on porous materials in damp environments.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which device aids in visualizing minute accelerant residues on debris?',
        'choices'     => json_encode([
            'UV light',
            'Paint swatch lamp',
            'Infrared thermometer',
            'Depth gauge',
        ]),
        'answer'      => 'UV light',
        'explanation' => 'Certain accelerant traces fluoresce under UV, highlighting residues on debris samples.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which term describes a fire caused by mechanical failure without external ignition source?',
        'choices'     => json_encode([
            'Accidental fire',
            'Incendiary fire',
            'Natural fire',
            'Undetermined fire',
        ]),
        'answer'      => 'Accidental fire',
        'explanation' => 'Mechanical failures (e.g., motor overheating) without intent are classified as accidental.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which procedure maintains evidence dryness during humid transport conditions?',
        'choices'     => json_encode([
            'Include desiccant packets in sealed can',
            'Leave container vented',
            'Store outside overnight',
            'Silicone coating inside lid',
        ]),
        'answer'      => 'Include desiccant packets in sealed can',
        'explanation' => 'Desiccants absorb moisture, preventing microbial growth and pattern degradation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which document outlines qualifications required for fire investigators?',
        'choices'     => json_encode([
            'NFPA 1033',
            'NFPA 921',
            'NFPA 1',
            'NFPA 72',
        ]),
        'answer'      => 'NFPA 1033',
        'explanation' => 'NFPA 1033 sets the professional qualifications and competencies for fire investigators.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which lighting condition is BEST for examining subtle char patterns?',
        'choices'     => json_encode([
            'Raking light at low angle',
            'Direct overhead flood',
            'UV light only',
            'Flashlight from handheld',
        ]),
        'answer'      => 'Raking light at low angle',
        'explanation' => 'Low-angle lighting casts shadows in depressions, enhancing visibility of patterns.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which residue on masonry may mimic accelerant patterns and must be distinguished?',
        'choices'     => json_encode([
            'Efflorescence salts',
            'Oil smear',
            'Heat blisters',
            'Ash layer',
        ]),
        'answer'      => 'Efflorescence salts',
        'explanation' => 'Salt deposits can form light-colored patterns resembling pour marks on brick or concrete.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which interview technique ensures consistency across multiple witnesses?',
        'choices'     => json_encode([
            'Standardized question protocol',
            'Free-form narrative only',
            'Yes/no checklist',
            'Group interview',
        ]),
        'answer'      => 'Standardized question protocol',
        'explanation' => 'Using the same structured questions reduces variability and bias in responses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which factor MOST affects the rate of spalling on concrete surfaces?',
        'choices'     => json_encode([
            'Moisture content',
            'Ambient lighting',
            'Char color',
            'Witness proximity',
        ]),
        'answer'      => 'Moisture content',
        'explanation' => 'High moisture in concrete leads to explosive spalling under rapid heating.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which pattern indicates fire spread upward through a stairwell?',
        'choices'     => json_encode([
            'V-shaped soot lines on stair risers',
            'Pour patterns on landing',
            'Alligatoring on handrail',
            'Arc mapping on balusters',
        ]),
        'answer'      => 'V-shaped soot lines on stair risers',
        'explanation' => 'Soot tracks against risers show upward airflow and fire progression in stairwells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which tool aids rapid on-scene pH testing of debris to detect alkaline accelerants?',
        'choices'     => json_encode([
            'pH paper strips',
            'Moisture meter',
            'Depth gauge',
            'Thermal camera',
        ]),
        'answer'      => 'pH paper strips',
        'explanation' => 'Alkaline accelerants raise pH; paper strips give quick indication on debris samples.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which pattern suggests flashover occurred?',
        'choices'     => json_encode([
            'All surfaces uniformly charred',
            'Localized V-patterns only',
            'Pour patterns only',
            'Circular char at center',
        ]),
        'answer'      => 'All surfaces uniformly charred',
        'explanation' => 'Flashover causes widespread ignition, producing uniform charring across materials.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which sample preservation method prevents volatilization of light hydrocarbons?',
        'choices'     => json_encode([
            'Seal airtight metal can immediately',
            'Cool in ice bath then bag',
            'Expose to air briefly',
            'Store in plastic crate',
        ]),
        'answer'      => 'Seal airtight metal can immediately',
        'explanation' => 'Rapid sealing in metal prevents loss of volatile compounds critical for lab analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which documentation must accompany digital photographs submitted as evidence?',
        'choices'     => json_encode([
            'Metadata including date/time and camera settings',
            'Printed copies only',
            'Witness list',
            'Sketch',
        ]),
        'answer'      => 'Metadata including date/time and camera settings',
        'explanation' => 'Metadata verifies when and how images were captured, ensuring authenticity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 5,
        'question'    => 'Which categorization applies when evidence cannot establish a cause?',
        'choices'     => json_encode([
            'Undetermined origin',
            'Accidental fire',
            'Incendiary fire',
            'Natural fire',
        ]),
        'answer'      => 'Undetermined origin',
        'explanation' => 'When patterns and data are inconclusive, the fire’s origin is classified as undetermined.',
        'created_at'  => $now,
        'updated_at'  => $now,
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
