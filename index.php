<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfólio Acadêmico - Ana Carolina Tavares</title>
    <meta name="description" content="Portfólio acadêmico de Ana Carolina Tavares Almeida Clemente, estudante de Desenvolvimento de Sistemas." />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-slate-950 text-slate-100 antialiased">
    <div id="scrollProgress" class="fixed left-0 top-0 z-50 h-1 w-0 bg-cyan-400"></div>
    <style>
      html { scroll-behavior: smooth; }
      .reveal {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.6s ease, transform 0.6s ease;
      }
      .reveal.is-visible {
        opacity: 1;
        transform: translateY(0);
      }
      .card-hover {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
      }
      .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 35px rgba(6, 182, 212, 0.12);
      }
    </style>
    <header class="border-b border-slate-800 bg-slate-900/80 backdrop-blur">
      <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
        <a href="#top" class="text-lg font-semibold tracking-wide text-cyan-400">Ana Carolina</a>
        <nav class="flex gap-4 text-sm text-slate-300">
          <a href="#apresentacao" class="transition hover:text-white">Apresentação</a>
          <a href="#projetos" class="transition hover:text-white">Projetos</a>
          <a href="#competencias" class="transition hover:text-white">Competências</a>
          <a href="#contatos" class="transition hover:text-white">Contatos</a>
        </nav>
      </div>
    </header>

    <main id="top" class="mx-auto max-w-6xl px-6 py-12 lg:py-20">
      <section class="grid gap-10 rounded-3xl border border-slate-800 bg-gradient-to-br from-slate-900 via-slate-900 to-cyan-950 p-8 shadow-2xl shadow-cyan-950/20 lg:grid-cols-[1.2fr_0.8fr] lg:p-12">
        <div>
          <p class="mb-4 text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Portfólio Acadêmico</p>
          <h1 class="text-4xl font-bold leading-tight sm:text-5xl">
            Ana Carolina Tavares Almeida Clemente
          </h1>
          <p class="mt-6 max-w-2xl text-lg text-slate-300">
            Estudante do curso Técnico em Desenvolvimento de Sistemas, com interesse em desenvolvimento web, backend e construção de soluções digitais.
          </p>
          <div class="mt-8 flex flex-wrap gap-3">
            <a href="#projetos" class="rounded-full bg-cyan-500 px-5 py-2.5 font-medium text-slate-950 transition hover:bg-cyan-400">Ver projetos</a>
            <a href="#contatos" class="rounded-full border border-slate-700 px-5 py-2.5 font-medium text-slate-200 transition hover:border-cyan-400 hover:text-cyan-300">Contatos</a>
            <button id="curiosityToggle" class="rounded-full border border-cyan-400/40 px-5 py-2.5 font-medium text-cyan-200 transition hover:bg-cyan-500/10">Mostrar curiosidade</button>
          </div>
          <div id="curiosityPanel" class="mt-4 hidden rounded-2xl border border-cyan-500/30 bg-cyan-500/10 p-4 text-sm text-cyan-100">
            <p class="font-semibold">Curiosidade</p>
            <p class="mt-1">Cada projeto que construo é uma oportunidade de transformar ideias em soluções claras, funcionais e com propósito.</p>
          </div>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-950/70 p-6">
          <h2 class="text-xl font-semibold text-white">Resumo acadêmico</h2>
          <p id="timeGreeting" class="mt-3 text-sm text-cyan-300"></p>
          <ul class="mt-5 space-y-4 text-sm text-slate-300">
            <li><span class="font-semibold text-cyan-400">Curso:</span> Técnico em Desenvolvimento de Sistemas</li>
            <li><span class="font-semibold text-cyan-400">Instituição:</span> Escola Industrial Deputado Domingos de Figueiredo</li>
            <li><span class="font-semibold text-cyan-400">Ano:</span> 2026</li>
            <li><span class="font-semibold text-cyan-400">Foco:</span> Desenvolvimento web, backend e e-commerce</li>
          </ul>
        </div>
      </section>

      <section id="apresentacao" class="mt-16">
        <div class="mb-6">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Apresentação</p>
          <h2 class="mt-2 text-3xl font-semibold text-white">Sobre mim</h2>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-900 p-8 text-slate-300 shadow-lg shadow-slate-950/40">
          <p class="leading-8">
            Meu nome é <span class="font-semibold text-white">Ana Carolina Tavares Almeida Clemente</span> e sou estudante do curso <span class="font-semibold text-white">Técnico em Desenvolvimento de Sistemas</span> da <span class="font-semibold text-white">Escola Industrial Deputado Domingos de Figueiredo</span>.
          </p>
          <p class="mt-4 leading-8">
            Este portfólio tem como objetivo apresentar os principais projetos desenvolvidos durante minha formação, demonstrando os conhecimentos adquiridos em programação, desenvolvimento web, arquitetura de software e banco de dados. Ao longo do curso, participei da criação de sistemas voltados para o comércio eletrônico, aplicando tecnologias modernas e metodologias de desenvolvimento.
          </p>
        </div>
      </section>

      <section class="mt-16">
        <div class="mb-6">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Objetivos</p>
          <h2 class="mt-2 text-3xl font-semibold text-white">Objetivos profissionais</h2>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-900 p-8 text-slate-300 shadow-lg shadow-slate-950/40">
          <p class="leading-8">
            Busco aprimorar constantemente meus conhecimentos na área de tecnologia, especialmente no desenvolvimento de sistemas web e backend. Meu objetivo é atuar profissionalmente no desenvolvimento de software, contribuindo para a criação de soluções eficientes, seguras e inovadoras.
          </p>
        </div>
      </section>

      <section id="projetos" class="mt-16">
        <div class="mb-8">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Projetos</p>
          <h2 class="mt-2 text-3xl font-semibold text-white">Projetos desenvolvidos</h2>
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
          <article class="card-hover rounded-2xl border border-slate-800 bg-slate-900 p-8 shadow-lg shadow-slate-950/40">
            <h3 class="text-2xl font-semibold text-white">Kaylab - E-commerce de chaveiros</h3>
            <p class="mt-4 text-slate-300">
              Projeto apresentado na Feira de Ciências de 2025, com foco em um e-commerce especializado na venda de chaveiros personalizados.
            </p>
            <div class="mt-6">
              <p class="font-semibold text-cyan-400">Minha participação</p>
              <p class="mt-2 text-slate-300">Atuei como Desenvolvedora Backend, responsável pela lógica do sistema, integração entre páginas, manipulação de dados e organização do projeto.</p>
            </div>
            <div class="mt-6">
              <p class="font-semibold text-cyan-400">Tecnologias</p>
              <div class="mt-3 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-800 px-3 py-1 text-sm text-slate-200">PHP</span>
                <span class="rounded-full bg-slate-800 px-3 py-1 text-sm text-slate-200">Tailwind CSS</span>
                <span class="rounded-full bg-slate-800 px-3 py-1 text-sm text-slate-200">MVC</span>
              </div>
            </div>
            <button data-toggle-target="projectOne" class="mt-6 rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 transition hover:border-cyan-400 hover:text-cyan-300">Ver mais detalhes</button>
            <div id="projectOne" class="mt-4 hidden rounded-xl border border-slate-800 bg-slate-950/60 p-4 text-sm text-slate-300">
              <p>Este projeto me ajudou a fortalecer a lógica de organização do sistema, a comunicação entre as páginas e a construção de uma experiência mais intuitiva para o usuário.</p>
            </div>
            <div class="mt-6">
              <p class="font-semibold text-cyan-400">Funcionalidades</p>
              <ul class="mt-2 list-disc space-y-1 pl-5 text-slate-300">
                <li>Cadastro de produtos</li>
                <li>Exibição de catálogo</li>
                <li>Gerenciamento de informações do sistema</li>
                <li>Organização de código com arquitetura MVC</li>
              </ul>
            </div>
          </article>

          <article class="card-hover rounded-2xl border border-slate-800 bg-slate-900 p-8 shadow-lg shadow-slate-950/40">
            <h3 class="text-2xl font-semibold text-white">E-commerce de motocicletas</h3>
            <p class="mt-4 text-slate-300">
              Sistema desenvolvido para aplicar conceitos de desenvolvimento web e construção de páginas comerciais voltadas para venda de motocicletas.
            </p>
            <div class="mt-6">
              <p class="font-semibold text-cyan-400">Minha participação</p>
              <p class="mt-2 text-slate-300">Participei de todas as etapas, desde o planejamento até a implementação e organização das páginas.</p>
            </div>
            <div class="mt-6">
              <p class="font-semibold text-cyan-400">Tecnologias</p>
              <div class="mt-3 flex flex-wrap gap-2">
                <span class="rounded-full bg-slate-800 px-3 py-1 text-sm text-slate-200">HTML</span>
                <span class="rounded-full bg-slate-800 px-3 py-1 text-sm text-slate-200">Bootstrap</span>
              </div>
            </div>
            <button data-toggle-target="projectTwo" class="mt-6 rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 transition hover:border-cyan-400 hover:text-cyan-300">Ver mais detalhes</button>
            <div id="projectTwo" class="mt-4 hidden rounded-xl border border-slate-800 bg-slate-950/60 p-4 text-sm text-slate-300">
              <p>Esse projeto foi importante para desenvolver a percepção de estrutura de navegação, apresentação visual e organização de conteúdo comercial em páginas web.</p>
            </div>
            <div class="mt-6">
              <p class="font-semibold text-cyan-400">Funcionalidades</p>
              <ul class="mt-2 list-disc space-y-1 pl-5 text-slate-300">
                <li>Página inicial</li>
                <li>Catálogo de motocicletas</li>
                <li>Exibição de informações dos produtos</li>
                <li>Estrutura de navegação entre páginas</li>
              </ul>
            </div>
          </article>
        </div>
      </section>

      <section id="competencias" class="mt-16">
        <div class="mb-6">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Competências</p>
          <h2 class="mt-2 text-3xl font-semibold text-white">Habilidades desenvolvidas</h2>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-900 p-8 shadow-lg shadow-slate-950/40">
          <div class="flex flex-wrap gap-3">
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">Desenvolvimento Web</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">Programação Backend</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">PHP</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">HTML</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">CSS</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">Tailwind CSS</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">Arquitetura MVC</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">Lógica de Programação</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">Trabalho em Equipe</span>
            <span class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200">Resolução de Problemas</span>
          </div>
        </div>
      </section>

      <section class="mt-16">
        <div class="mb-6">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Conclusão</p>
          <h2 class="mt-2 text-3xl font-semibold text-white">Fechamento</h2>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-900 p-8 text-slate-300 shadow-lg shadow-slate-950/40">
          <p class="leading-8">
            Os projetos desenvolvidos ao longo do curso Técnico em Desenvolvimento de Sistemas permitiram a aplicação prática dos conhecimentos adquiridos em sala de aula. A participação na construção de sistemas de e-commerce proporcionou experiência em desenvolvimento web, organização de projetos e utilização de tecnologias amplamente empregadas no mercado de trabalho.
          </p>
          <p class="mt-4 leading-8">
            Essas experiências fortaleceram minhas competências técnicas e profissionais, preparando-me para novos desafios acadêmicos e para minha futura atuação na área de tecnologia.
          </p>
        </div>
      </section>

      <section id="contatos" class="mt-16">
        <div class="mb-6">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Contatos</p>
          <h2 class="mt-2 text-3xl font-semibold text-white">Informações de contato</h2>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-900 p-8 shadow-lg shadow-slate-950/40">
          <p class="text-slate-300"><span class="font-semibold text-white">Nome:</span> Ana Carolina Tavares Almeida Clemente</p>
          <p class="mt-2 text-slate-300"><span class="font-semibold text-white">Curso:</span> Técnico em Desenvolvimento de Sistemas</p>
          <p class="mt-2 text-slate-300"><span class="font-semibold text-white">Instituição:</span> Escola Industrial Deputado Domingos de Figueiredo</p>
        </div>
      </section>
    </main>
    <script>
      const progressBar = document.getElementById('scrollProgress');
      const greeting = document.getElementById('timeGreeting');
      const curiosityToggle = document.getElementById('curiosityToggle');
      const curiosityPanel = document.getElementById('curiosityPanel');
      const detailButtons = document.querySelectorAll('[data-toggle-target]');

      const updateProgress = () => {
        const scrollTop = window.scrollY;
        const height = document.documentElement.scrollHeight - window.innerHeight;
        const percent = height > 0 ? (scrollTop / height) * 100 : 0;
        progressBar.style.width = `${percent}%`;
      };

      const updateGreeting = () => {
        const hour = new Date().getHours();
        if (hour < 12) {
          greeting.textContent = 'Bom dia! Aproveite a visita e descubra mais sobre minha trajetória.';
        } else if (hour < 18) {
          greeting.textContent = 'Boa tarde! Estou animada para compartilhar meus projetos com você.';
        } else {
          greeting.textContent = 'Boa noite! Acompanhe meus trabalhos e minhas competências.';
        }
      };

      document.querySelectorAll('main section, main article').forEach((element) => {
        element.classList.add('reveal');
      });

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
          }
        });
      }, { threshold: 0.15 });

      document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));

      if (curiosityToggle && curiosityPanel) {
        curiosityToggle.addEventListener('click', () => {
          const isHidden = curiosityPanel.classList.toggle('hidden');
          curiosityToggle.textContent = isHidden ? 'Mostrar curiosidade' : 'Ocultar curiosidade';
        });
      }

      detailButtons.forEach((button) => {
        button.addEventListener('click', () => {
          const targetId = button.getAttribute('data-toggle-target');
          const targetPanel = document.getElementById(targetId);
          if (targetPanel) {
            targetPanel.classList.toggle('hidden');
            button.textContent = targetPanel.classList.contains('hidden') ? 'Ver mais detalhes' : 'Ocultar detalhes';
          }
        });
      });

      updateGreeting();
      updateProgress();
      window.addEventListener('scroll', updateProgress);
      window.addEventListener('resize', updateProgress);
    </script>
  </body>
</html>
