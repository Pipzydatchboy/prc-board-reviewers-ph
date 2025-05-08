<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart2Seeder extends Seeder
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
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the primary role of the Direct Antiglobulin Test (DAT)?',
        'choices'     => json_encode([
            'Detect in vivo sensitization of red cells',
            'Screen for unexpected antibodies',
            'Quantify hemoglobin levels',
            'Measure platelet function',
        ]),
        'answer'      => 'Detect in vivo sensitization of red cells',
        'explanation' => 'DAT detects antibodies or complement bound to patient red cells in vivo.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which antibody class is primarily detected by the Indirect Antiglobulin Test (IAT)?',
        'choices'     => json_encode([
            'IgG',
            'IgM',
            'IgA',
            'IgE',
        ]),
        'answer'      => 'IgG',
        'explanation' => 'IAT detects IgG antibodies in patient serum reacting with reagent red cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the principle of the Gel Column Agglutination Technique?',
        'choices'     => json_encode([
            'Antigen-antibody complexes trapped in gel matrix',
            'Centrifugal sedimentation of cells',
            'Colorimetric detection of hemolysis',
            'Flow cytometry of RBCs',
        ]),
        'answer'      => 'Antigen-antibody complexes trapped in gel matrix',
        'explanation' => 'Agglutinated cells remain at top of gel column, while non-agglutinated cells pellet at bottom.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which lectin is used to detect the presence of A1 antigen on red cells?',
        'choices'     => json_encode([
            'Dolichos biflorus',
            'Ulex europaeus',
            'Wheat germ agglutinin',
            'Ricinus communis',
        ]),
        'answer'      => 'Dolichos biflorus',
        'explanation' => 'Dolichos biflorus lectin agglutinates A1 cells but not A2 cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What temperature is optimal for Cold Agglutinin testing?',
        'choices'     => json_encode([
            '4°C',
            '22°C',
            '37°C',
            '56°C',
        ]),
        'answer'      => '4°C',
        'explanation' => 'Cold agglutinins react at cold temperatures, typically around 4°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which antigen is neutralized by soluble substance neutralization in antibody identification?',
        'choices'     => json_encode([
            'Lewis',
            'Rh',
            'Kell',
            'Duffy',
        ]),
        'answer'      => 'Lewis',
        'explanation' => 'Soluble Lea and Leb substances neutralize Lewis antibodies in serum.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the typical dilution factor used in antibody titration tests?',
        'choices'     => json_encode([
            'Two-fold serial dilutions',
            'Ten-fold serial dilutions',
            'Five-fold serial dilutions',
            'Water blank control',
        ]),
        'answer'      => 'Two-fold serial dilutions',
        'explanation' => 'Antibody titers are determined using two-fold serial dilutions of patient serum.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which chemical is used to treat red cells to enhance detection of Rh antibodies?',
        'choices'     => json_encode([
            '3% AET (2-aminoethylisothiouronium bromide)',
            'Papain',
            'Trypsin',
            'PEG (polyethylene glycol)',
        ]),
        'answer'      => '3% AET (2-aminoethylisothiouronium bromide)',
        'explanation' => 'AET treatment denatures red cell surface proteins enhancing certain antibody reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the main purpose of using polyethylene glycol (PEG) in antibody screening?',
        'choices'     => json_encode([
            'Enhance IgG antibody uptake',
            'Inactivate complement',
            'Lyse red cells',
            'Stabilize antigens',
        ]),
        'answer'      => 'Enhance IgG antibody uptake',
        'explanation' => 'PEG concentrates antibodies by excluding water, increasing sensitivity of detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which reagent is used to detect complement-binding antibodies in serum?',
        'choices'     => json_encode([
            'Anti-C3 reagent',
            'Anti-IgG reagent',
            'Anti-A1 lectin',
            'Anti-D reagent',
        ]),
        'answer'      => 'Anti-C3 reagent',
        'explanation' => 'Anti-C3 reagent detects C3b or C3d bound to red cells indicating complement fixation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the function of enzyme-treated red cells in antibody identification?',
        'choices'     => json_encode([
            'Enhance or destroy certain antigens',
            'Increase RBC viability',
            'Measure hemolysis',
            'Detect cold antibodies only',
        ]),
        'answer'      => 'Enhance or destroy certain antigens',
        'explanation' => 'Enzymes modify antigen expression to help in distinguishing antibody specificities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which antigen is resistant to papain treatment on red cells?',
        'choices'     => json_encode([
            'Duffy (Fya/Fyb)',
            'Rh (D)',
            'Lewis',
            'MNS',
        ]),
        'answer'      => 'Rh (D)',
        'explanation' => 'Rh antigens are generally resistant to proteolytic enzymes like papain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the rationale for using LISS (Low Ionic Strength Solution) in antibody testing?',
        'choices'     => json_encode([
            'Reduce zeta potential to enhance antibody binding',
            'Neutralize complement',
            'Preserve RBC structure',
            'Increase reaction temperature',
        ]),
        'answer'      => 'Reduce zeta potential to enhance antibody binding',
        'explanation' => 'LISS reduces repulsive forces, promoting antigen-antibody interactions at lower antibody concentrations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which test is performed to confirm the specificity of an antibody after initial identification?',
        'choices'     => json_encode([
            'Antigen typing of donor cells',
            'Complete blood count',
            'Serum protein electrophoresis',
            'Direct antiglobulin test',
        ]),
        'answer'      => 'Antigen typing of donor cells',
        'explanation' => 'Typing donor cells for specific antigens confirms antibody specificity in patient serum.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the effect of complement activation on red cells in vitro during antibody testing?',
        'choices'     => json_encode([
            'C3b deposition without hemolysis',
            'Immediate cell lysis',
            'RBC agglutination',
            'No observable change',
        ]),
        'answer'      => 'C3b deposition without hemolysis',
        'explanation' => 'In vitro complement activation often leads to C3b binding without visible hemolysis in tests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which molecule is used as an additive in blood storage to restore 2,3-DPG levels?',
        'choices'     => json_encode([
            'Adenine',
            'Citrate',
            'Phosphate',
            'Dextrose',
        ]),
        'answer'      => 'Adenine',
        'explanation' => 'Adenine supports ATP production and helps restore 2,3-DPG levels during storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the recommended storage temperature for red cell units?',
        'choices'     => json_encode([
            '1–6°C',
            '-18°C',
            '20–24°C',
            '37°C',
        ]),
        'answer'      => '1–6°C',
        'explanation' => 'Red cells are stored at 1–6°C to maintain cell viability and prevent bacterial growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which method is used to detect microagglutination in antibody screening?',
        'choices'     => json_encode([
            'Tube method',
            'Solid-phase red cell adherence',
            'Column agglutination',
            'Flow cytometry',
        ]),
        'answer'      => 'Tube method',
        'explanation' => 'The tube method allows visual detection of fine microagglutinates in antibody screens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'What is the main risk associated with transferring antibody screening tests to automated platforms?',
        'choices'     => json_encode([
            'Reduced sensitivity to low-titer antibodies',
            'Increased reagent costs',
            'Higher hemolysis rates',
            'Longer turnaround times',
        ]),
        'answer'      => 'Reduced sensitivity to low-titer antibodies',
        'explanation' => 'Automation may miss low-titer or weakly reactive antibodies compared to manual methods.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 35,
        'part'        => 2,
        'question'    => 'Which factor most commonly interferes with antibody identification in recently transfused patients?',
        'choices'     => json_encode([
            'Mixed-field reactions',
            'High bilirubin levels',
            'Low hematocrit',
            'Elevated leukocyte count',
        ]),
        'answer'      => 'Mixed-field reactions',
        'explanation' => 'Mixed-field agglutination from donor and patient cells complicates interpretation in recently transfused patients.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
