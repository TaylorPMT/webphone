<?php

namespace Illuminate\Foundation\Console;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class ComponentMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:component';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new view component class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Component';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (parent::handle() === false && ! $this->option('force')) {
            return false;
        }

        if (! $this->option('inline')) {
            $this->writeView();
        }
    }

    /**
     * Write the view for the component.
     *
     * @return void
     */
    protected function writeView()
    {
        $view = $this->getView();

        $path = resource_path('views').'/'.str_replace('.', '/', 'components.'.$view);

        if (! $this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }

        file_put_contents(
            $path.'.blade.php',
            '<div>
    <!-- '.Inspiring::quote().' -->
</div>'
        );
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        if ($this->option('inline')) {
            return str_replace(
                'DummyView',
                "<<<'blade'\n<div>\n    ".Inspiring::quote()."\n</div>\nblade",
                parent::buildClass($name)
            );
        }

        return str_replace(
            'DummyView',
            'view(\'components.'.$this->getView().'\')',
            parent::buildClass($name)
        );
    }

    /**
     * Get the view name relative to the components directory.
     *
     * @return string view
     */
    protected function getView()
    {
<<<<<<< HEAD
        $name = str_replace('\\', '/', $this->argument('name'));

        return collect(explode('/', $name))
=======
<<<<<<< HEAD
        return collect(explode('/', $this->argument('name')))
=======
        $name = str_replace('\\', '/', $this->argument('name'));

        return collect(explode('/', $name))
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
            ->map(function ($part) {
                return Str::kebab($part);
            })
            ->implode('.');
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/view-component.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\View\Components';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Create the class even if the component already exists'],
            ['inline', null, InputOption::VALUE_NONE, 'Create a component that renders an inline view'],
        ];
    }
}
