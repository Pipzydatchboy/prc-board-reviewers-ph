<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart8Seeder extends Seeder
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
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which antibody is primarily implicated in acute hemolytic transfusion reactions?',
        'choices'    => json_encode([
            'IgM',
            'IgG',
            'IgA',
            'IgE',
        ]),
        'answer'     => 'IgM',
        'explanation'=> 'IgM antibodies activate complement causing rapid intravascular hemolysis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'What is the mechanism of action of polyethylene glycol (PEG) in immunohematology testing?',
        'choices'    => json_encode([
            'Concentrates antibodies by excluding water',
            'Denatures red cell antigens',
            'Blocks complement activation',
            'Enhances enzymatic activity',
        ]),
        'answer'     => 'Concentrates antibodies by excluding water',
        'explanation'=> 'PEG increases antibody concentration improving sensitivity in IAT.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which test differentiates between alloantibodies and autoantibodies?',
        'choices'    => json_encode([
            'Autoadsorption',
            'IAT',
            'DAT',
            'Reverse grouping',
        ]),
        'answer'     => 'Autoadsorption',
        'explanation'=> 'Autoadsorption removes autoantibodies from patient serum to reveal alloantibodies.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which phenomenon causes mixed-field agglutination in blood grouping?',
        'choices'    => json_encode([
            'Presence of two cell populations',
            'Complement fixation',
            'Cold agglutinin',
            'High protein plasma',
        ]),
        'answer'     => 'Presence of two cell populations',
        'explanation'=> 'Mixed-field occurs when variant populations (e.g., transfused cells) are present.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'What is the primary purpose of saline replacement in the direct antiglobulin test?',
        'choices'    => json_encode([
            'Remove unbound antibodies',
            'Enhance complement binding',
            'Dilute cell suspension',
            'Neutralize antigens',
        ]),
        'answer'     => 'Remove unbound antibodies',
        'explanation'=> 'Saline wash eliminates free antibodies ensuring accurate DAT results.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which virus poses a risk in cellular blood components and is mitigated by leukoreduction?',
        'choices'    => json_encode([
            'CMV',
            'HBV',
            'HIV',
            'HCV',
        ]),
        'answer'     => 'CMV',
        'explanation'=> 'CMV resides in leukocytes; removal reduces transmission risk to at-risk patients.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'What is the significance of the Kleihauer-Betke test?',
        'choices'    => json_encode([
            'Quantify fetal RBCs in maternal circulation',
            'Measure antibody titer',
            'Detect cold agglutinins',
            'Calculate hematocrit',
        ]),
        'answer'     => 'Quantify fetal RBCs in maternal circulation',
        'explanation'=> 'K-B stain identifies fetal cells for RhIG dosing in fetomaternal hemorrhage.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which condition requires the use of washed red blood cells?',
        'choices'    => json_encode([
            'IgA deficiency with anaphylaxis',
            'Anemia of chronic disease',
            'Iron deficiency anemia',
            'Polycythemia vera',
        ]),
        'answer'     => 'IgA deficiency with anaphylaxis',
        'explanation'=> 'Washed RBCs remove plasma proteins including IgA preventing reactions in IgA-deficient patients.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'What is the mechanism of bacterial growth prevention in platelet storage?',
        'choices'    => json_encode([
            'Agitation and room temperature storage',
            'Cold storage',
            'Gamma irradiation',
            'Aseptic collection only',
        ]),
        'answer'     => 'Agitation and room temperature storage',
        'explanation'=> 'Continuous agitation provides gas exchange but requires monitoring for bacterial contamination.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which antigen is associated with the MNS blood group system?',
        'choices'    => json_encode([
            'M and N',
            'K and k',
            'Fya and Fyb',
            'Lea and Leb',
        ]),
        'answer'     => 'M and N',
        'explanation'=> 'MNS system includes M and N antigens encoded by glycophorin A variants.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which hemovigilance metric tracks transfusion reactions per 1,000 units?',
        'choices'    => json_encode([
            'Reaction rate',
            'Donor adverse events',
            'Inventory turnover',
            'Crossmatch-to-transfusion ratio',
        ]),
        'answer'     => 'Reaction rate',
        'explanation'=> 'Reaction rate quantifies adverse transfusion events normalized per units transfused.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'What is the purpose of CMV-seronegative blood products?',
        'choices'    => json_encode([
            'Prevent CMV transmission',
            'Increase shelf life',
            'Reduce alloimmunization',
            'Enhance oxygen delivery',
        ]),
        'answer'     => 'Prevent CMV transmission',
        'explanation'=> 'CMV-seronegative units are provided to immunocompromised patients to avoid infection.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which assay is used to measure residual fibrinogen in cryosupernatant?',
        'choices'    => json_encode([
            'Clauss assay',
            'PTT',
            'Bleeding time',
            'Turbidimetric method',
        ]),
        'answer'     => 'Clauss assay',
        'explanation'=> 'Clauss method is the standard for quantitative fibrinogen determination.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which molecule serves as the universal donor red cell in emergencies?',
        'choices'    => json_encode([
            'Group O negative',
            'Group AB positive',
            'Group O positive',
            'Group A negative',
        ]),
        'answer'     => 'Group O negative',
        'explanation'=> 'O negative RBCs lack A, B, and D antigens minimizing reaction risk.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which test is used for antigen typing when molecular methods are unavailable?',
        'choices'    => json_encode([
            'Serologic panel typing',
            'PCR',
            'Flow cytometry',
            'Western blot',
        ]),
        'answer'     => 'Serologic panel typing',
        'explanation'=> 'Panel typing uses antisera against specific antigens for phenotyping cells.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'What is the effect of leukoreduction on cytokine accumulation in stored blood?',
        'choices'    => json_encode([
            'Reduces accumulation',
            'Increases accumulation',
            'No effect',
            'Variable effect',
        ]),
        'answer'     => 'Reduces accumulation',
        'explanation'=> 'Removing WBCs decreases cytokine release that can cause febrile reactions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which plasma protein is measured to assess liver donor suitability?',
        'choices'    => json_encode([
            'Albumin',
            'IgG',
            'Fibrinogen',
            'C-reactive protein',
        ]),
        'answer'     => 'Albumin',
        'explanation'=> 'Albumin level reflects synthetic liver function in donor evaluation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which method reduces pathogen load in red cell concentrates?',
        'choices'    => json_encode([
            'Irradiation',
            'Leukoreduction',
            'Autoclaving',
            'Filtration',
        ]),
        'answer'     => 'Irradiation',
        'explanation'=> 'Irradiation inactivates lymphocytes and some pathogens without damaging RBCs significantly.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'Which antigen-negative unit is recommended for a patient with anti-K antibodies?',
        'choices'    => json_encode([
            'K-negative',
            'D-negative',
            'E-negative',
            'S-negative',
        ]),
        'answer'     => 'K-negative',
        'explanation'=> 'Selecting units lacking the corresponding antigen prevents hemolytic reactions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 35,
        'part'       => 8,
        'question'   => 'What is the best practice for post-transfusion patient monitoring?',
        'choices'    => json_encode([
            'Monitor vital signs pre, during, and post-transfusion',
            'Check hemoglobin only post-transfusion',
            'Observe 5 minutes only',
            'No monitoring needed',
        ]),
        'answer'     => 'Monitor vital signs pre, during, and post-transfusion',
        'explanation'=> 'Continuous monitoring ensures early detection of transfusion reactions.',
        'created_at' => $now,
        'updated_at' => $now,
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
