<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart4Seeder extends Seeder
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

       // 61
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which functional group is present in ethanol (CH₃CH₂OH)?",
           'choices'     => json_encode([
               'Hydroxyl (alcohol)',
               'Carbonyl (ketone)',
               'Carboxyl (acid)',
               'Amine',
           ]),
           'answer'      => 'Hydroxyl (alcohol)',
           'explanation' => 'Ethanol contains an -OH functional group characteristic of alcohols.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 62
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "What type of compound has the general structure R-CHO?",
           'choices'     => json_encode([
               'Aldehyde',
               'Ketone',
               'Alcohol',
               'Ester',
           ]),
           'answer'      => 'Aldehyde',
           'explanation' => 'Aldehydes have a carbonyl group bonded to at least one hydrogen (R-CHO).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 63
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which reaction adds H₂ across a C=C double bond?",
           'choices'     => json_encode([
               'Hydrogenation',
               'Hydrolysis',
               'Dehydration',
               'Halogenation',
           ]),
           'answer'      => 'Hydrogenation',
           'explanation' => 'Hydrogenation adds hydrogen to unsaturated bonds (e.g., alkenes).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 64
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which mechanism involves a carbocation intermediate?",
           'choices'     => json_encode([
               'SN1',
               'SN2',
               'E2',
               'E1cb',
           ]),
           'answer'      => 'SN1',
           'explanation' => 'SN1 reactions proceed via formation of a carbocation intermediate.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 65
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "In HBr addition to propene, the major product is?",
           'choices'     => json_encode([
               '2-Bromopropane',
               '1-Bromopropane',
               'Propyl bromide',
               'Allyl bromide',
           ]),
           'answer'      => '2-Bromopropane',
           'explanation' => 'Markovnikov addition yields the bromine on the more substituted carbon.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 66
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which polymerization forms polyethylene from ethene monomers?",
           'choices'     => json_encode([
               'Addition polymerization',
               'Condensation polymerization',
               'Co-polymerization',
               'Dehydration synthesis',
           ]),
           'answer'      => 'Addition polymerization',
           'explanation' => 'Ethene polymerizes via addition to yield polyethylene.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 67
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "What is the functional group in carboxylic acids?",
           'choices'     => json_encode([
               'Carboxyl (-COOH)',
               'Amino (-NH₂)',
               'Ester (-COOR)',
               'Ether (R-O-R)',
           ]),
           'answer'      => 'Carboxyl (-COOH)',
           'explanation' => 'Carboxylic acids contain a -COOH group.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 68
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Esterification is an example of which reaction type?",
           'choices'     => json_encode([
               'Condensation',
               'Addition',
               'Substitution',
               'Elimination',
           ]),
           'answer'      => 'Condensation',
           'explanation' => 'Condensation reactions join molecules with removal of water (e.g., ester formation).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 69
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which is a monosaccharide?",
           'choices'     => json_encode([
               'Glucose',
               'Sucrose',
               'Lactose',
               'Maltose',
           ]),
           'answer'      => 'Glucose',
           'explanation' => 'Monosaccharides are single sugar units; glucose is one.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 70
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "In solution, glucose predominantly exists as which ring form?",
           'choices'     => json_encode([
               'Pyranose (6-membered)',
               'Furanose (5-membered)',
               'Open chain',
               'Anhydride',
           ]),
           'answer'      => 'Pyranose (6-membered)',
           'explanation' => 'Glucose cyclizes to a six-membered pyranose ring in solution.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 71
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "What is the building block of proteins?",
           'choices'     => json_encode([
               'Amino acids',
               'Monosaccharides',
               'Fatty acids',
               'Nucleotides',
           ]),
           'answer'      => 'Amino acids',
           'explanation' => 'Proteins are polymers of amino acid monomers.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 72
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Peptide bonds form between which functional groups?",
           'choices'     => json_encode([
               'Amino and carboxyl',
               'Hydroxyl and methyl',
               'Carbonyl and ether',
               'Phosphate and hydroxyl',
           ]),
           'answer'      => 'Amino and carboxyl',
           'explanation' => 'Peptide bonds link the amino group of one amino acid to the carboxyl of another.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 73
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which level of protein structure involves hydrogen bonding in the backbone?",
           'choices'     => json_encode([
               'Secondary structure',
               'Primary structure',
               'Tertiary structure',
               'Quaternary structure',
           ]),
           'answer'      => 'Secondary structure',
           'explanation' => 'Secondary structure includes α-helices and β-sheets stabilized by H-bonds.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 74
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "What is the Role of ATP in biochemical reactions?",
           'choices'     => json_encode([
               'Energy currency of the cell',
               'Structural component',
               'Catalytic core',
               'Signal receptor',
           ]),
           'answer'      => 'Energy currency of the cell',
           'explanation' => 'ATP stores and transfers energy for cellular processes.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 75
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which model describes enzyme-substrate interaction?",
           'choices'     => json_encode([
               'Lock and key',
               'Fluid mosaic',
               'Induced fit',
               'Bohr',
           ]),
           'answer'      => 'Induced fit',
           'explanation' => 'The induced fit model describes substrate-induced conformational change in enzymes.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 76
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which lipid is a major component of cell membranes?",
           'choices'     => json_encode([
               'Phospholipid',
               'Triglyceride',
               'Steroid',
               'Waxes',
           ]),
           'answer'      => 'Phospholipid',
           'explanation' => 'Phospholipids form bilayers that make up cell membranes.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 77
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which type of bond links monosaccharides in cellulose?",
           'choices'     => json_encode([
               'β-1,4-glycosidic bond',
               'α-1,4-glycosidic bond',
               'Peptide bond',
               'Phosphodiester bond',
           ]),
           'answer'      => 'β-1,4-glycosidic bond',
           'explanation' => 'Cellulose is a polymer of glucose linked by β-1,4-glycosidic bonds.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 78
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which nitrogenous base is found in RNA but not DNA?",
           'choices'     => json_encode([
               'Uracil',
               'Thymine',
               'Adenine',
               'Guanine',
           ]),
           'answer'      => 'Uracil',
           'explanation' => 'RNA uses uracil instead of thymine found in DNA.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 79
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which amino acid is achiral?",
           'choices'     => json_encode([
               'Glycine',
               'Alanine',
               'Valine',
               'Leucine',
           ]),
           'answer'      => 'Glycine',
           'explanation' => 'Glycine has two hydrogens on the α-carbon, making it achiral.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 80
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 4,
           'question'    => "Which coenzyme is derived from vitamin B3 and involved in redox reactions?",
           'choices'     => json_encode([
               'NAD⁺',
               'FAD',
               'CoA',
               'TPP',
           ]),
           'answer'      => 'NAD⁺',
           'explanation' => 'NAD⁺ (nicotinamide adenine dinucleotide) is derived from niacin (vitamin B3).',
           'created_at'  => $now,
           'updated_at'  => $now,
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
