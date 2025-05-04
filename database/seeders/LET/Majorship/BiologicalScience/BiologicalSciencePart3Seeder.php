<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

       // Part 3 – Question 41
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which organelle is responsible for detoxifying harmful substances and metabolizing lipids?',
           'choices'      => json_encode([
               'Smooth endoplasmic reticulum',
               'Rough endoplasmic reticulum',
               'Golgi apparatus',
               'Lysosome',
           ]),
           'answer'       => 'Smooth endoplasmic reticulum',
           'explanation'  => "The smooth ER lacks ribosomes and functions in lipid synthesis and detoxification.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 42
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which term describes the movement of solutes from an area of high concentration to low concentration via a carrier protein without energy?',
           'choices'      => json_encode([
               'Facilitated diffusion',
               'Active transport',
               'Endocytosis',
               'Osmosis',
           ]),
           'answer'       => 'Facilitated diffusion',
           'explanation'  => "Facilitated diffusion uses membrane proteins to move molecules down their concentration gradient.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 43
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which process in plants generates NADPH and O₂ as products?',
           'choices'      => json_encode([
               'Calvin cycle',
               'Light-dependent reactions',
               'Glycolysis',
               'Fermentation',
           ]),
           'answer'       => 'Light-dependent reactions',
           'explanation'  => "Light reactions in the thylakoid membranes produce ATP, NADPH, and release oxygen.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 44
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which type of RNA carries the genetic code from DNA to the ribosome?',
           'choices'      => json_encode([
               'tRNA',
               'rRNA',
               'mRNA',
               'snRNA',
           ]),
           'answer'       => 'mRNA',
           'explanation'  => "Messenger RNA conveys the genetic information transcribed from DNA to ribosomes.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 45
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which blood antigen is present on erythrocytes of a person with type O blood?',
           'choices'      => json_encode([
               'A antigen',
               'B antigen',
               'Rh antigen',
               'None of the above',
           ]),
           'answer'       => 'None of the above',
           'explanation'  => "Type O blood lacks A and B antigens on red blood cells.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 46
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which region of the brain controls coordination and balance?',
           'choices'      => json_encode([
               'Medulla oblongata',
               'Cerebellum',
               'Hypothalamus',
               'Cerebrum',
           ]),
           'answer'       => 'Cerebellum',
           'explanation'  => "The cerebellum integrates sensory input to fine-tune motor activity and balance.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 47
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which component of the cytoskeleton provides tracks for vesicle transport?',
           'choices'      => json_encode([
               'Microtubules',
               'Microfilaments',
               'Intermediate filaments',
               'Cellulose fibers',
           ]),
           'answer'       => 'Microtubules',
           'explanation'  => "Microtubules are hollow tubes that guide intracellular transport and maintain cell shape.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 48
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which hormone secreted by the pancreas lowers blood glucose levels?',
           'choices'      => json_encode([
               'Glucagon',
               'Insulin',
               'Somatostatin',
               'Gastrin',
           ]),
           'answer'       => 'Insulin',
           'explanation'  => "Insulin promotes cellular uptake of glucose, reducing blood sugar.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 49
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which type of immunity is mediated by antibodies in body fluids?',
           'choices'      => json_encode([
               'Cell-mediated immunity',
               'Humoral immunity',
               'Innate immunity',
               'Passive immunity',
           ]),
           'answer'       => 'Humoral immunity',
           'explanation'  => "Humoral immunity involves B cells and the antibodies they secrete.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 50
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which process uses light energy to convert ADP and NADP+ to ATP and NADPH?',
           'choices'      => json_encode([
               'Calvin cycle',
               'Electron transport chain in mitochondria',
               'Light-dependent reactions',
               'Photolysis',
           ]),
           'answer'       => 'Light-dependent reactions',
           'explanation'  => "These reactions in chloroplast thylakoids generate ATP and NADPH for the Calvin cycle.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 51
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which nitrogenous waste product is excreted by mammals?',
           'choices'      => json_encode([
               'Ammonia',
               'Urea',
               'Uric acid',
               'Allantoin',
           ]),
           'answer'       => 'Urea',
           'explanation'  => "Mammals convert ammonia to urea in the liver for safer excretion.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 52
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which bone cell type breaks down bone matrix during remodeling?',
           'choices'      => json_encode([
               'Osteoblast',
               'Osteocyte',
               'Osteoclast',
               'Chondrocyte',
           ]),
           'answer'       => 'Osteoclast',
           'explanation'  => "Osteoclasts resorb bone by secreting acids and enzymes.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 53
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which structure in the nephron is primarily responsible for glucose reabsorption?',
           'choices'      => json_encode([
               'Proximal convoluted tubule',
               'Loop of Henle',
               'Distal convoluted tubule',
               'Collecting duct',
           ]),
           'answer'       => 'Proximal convoluted tubule',
           'explanation'  => "The PCT reabsorbs most glucose, amino acids, and solutes from filtrate.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 54
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which muscle type is under voluntary control and characterized by striations?',
           'choices'      => json_encode([
               'Cardiac muscle',
               'Smooth muscle',
               'Skeletal muscle',
               'Myogenic muscle',
           ]),
           'answer'       => 'Skeletal muscle',
           'explanation'  => "Skeletal muscle is striated and controlled by the somatic nervous system.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 55
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which process forms the zygote following fertilization in animals?',
           'choices'      => json_encode([
               'Meiosis',
               'Syngamy',
               'Cleavage',
               'Gastrulation',
           ]),
           'answer'       => 'Syngamy',
           'explanation'  => "Syngamy is the fusion of male and female gametes to form a zygote.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 56
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which type of plant tissue provides structural support and is dead at maturity?',
           'choices'      => json_encode([
               'Collenchyma',
               'Parenchyma',
               'Sclerenchyma',
               'Epidermis',
           ]),
           'answer'       => 'Sclerenchyma',
           'explanation'  => "Sclerenchyma cells have thick lignified walls and are supportive and dead at maturity.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 57
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which gasotransmitter functions as a signaling molecule in smooth muscle relaxation?',
           'choices'      => json_encode([
               'Nitric oxide',
               'Carbon dioxide',
               'Sulfur dioxide',
               'Methane',
           ]),
           'answer'       => 'Nitric oxide',
           'explanation'  => "Nitric oxide diffsion to smooth muscle causing vasodilation.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 58
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which ecological interaction involves two species competing for the same limited resource?',
           'choices'      => json_encode([
               'Mutualism',
               'Competition',
               'Parasitism',
               'Predation',
           ]),
           'answer'       => 'Competition',
           'explanation'  => "Competition occurs when organisms vie for limited resources such as food or space.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 59
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which vessel carries oxygenated blood from lungs to heart?',
           'choices'      => json_encode([
               'Pulmonary artery',
               'Pulmonary vein',
               'Aorta',
               'Superior vena cava',
           ]),
           'answer'       => 'Pulmonary vein',
           'explanation'  => "Pulmonary veins return oxygen-rich blood from the lungs to the left atrium.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 60
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 3,
           'question'     => 'Which plant hormone promotes cell elongation and is used as a herbicide at high concentrations?',
           'choices'      => json_encode([
               'Auxin',
               'Cytokinin',
               'Gibberellin',
               'Ethylene',
           ]),
           'answer'       => 'Auxin',
           'explanation'  => "Auxins stimulate cell elongation; synthetic auxins can act as herbicides.",
           'created_at'   => $now,
           'updated_at'   => $now,
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
