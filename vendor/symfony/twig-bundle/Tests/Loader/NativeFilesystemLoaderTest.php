<?php

namespace Symfony\Bundle\TwigBundle\Tests\Loader;

use Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader;
use Symfony\Bundle\TwigBundle\Tests\TestCase;

class NativeFilesystemLoaderTest extends TestCase
{
    public function testWithNativeNamespace()
    {
        $loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        $loader->addPath('Fixtures/templates', 'Test');

        $this->assertSame('Fixtures'.\DIRECTORY_SEPARATOR.'templates'.\DIRECTORY_SEPARATOR.'Foo'.\DIRECTORY_SEPARATOR.'showContent.html.twig', $loader->getCacheKey('@Test/Foo/showContent.html.twig'));
    }

    /**
     * @expectedException \Twig\Error\LoaderError
     * @expectedExceptionMessage Template reference "TestBundle::Foo/showContent.html.twig" not found, did you mean "@Test/Foo/showContent.html.twig"?
     */
    public function testWithLegacyStyle1()
    {
        $loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        $loader->addPath('Fixtures/templates', 'Test');

        $loader->getCacheKey('TestBundle::Foo/showContent.html.twig');
    }

    /**
     * @expectedException \Twig\Error\LoaderError
     * @expectedExceptionMessage Template reference "TestBundle:Foo:showContent.html.twig" not found, did you mean "@Test/Foo/showContent.html.twig"?
     */
    public function testWithLegacyStyle2()
    {
        $loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        $loader->addPath('Fixtures/templates', 'Test');

        $loader->getCacheKey('TestBundle:Foo:showContent.html.twig');
    }
}
