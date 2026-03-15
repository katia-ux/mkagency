import { useScrollReveal } from '../hooks/useScrollReveal'

export default function WhatWeDo() {
  const ref = useScrollReveal()

  return (
    <section ref={ref} className="section-pad bg-paper" id="about">
      <div className="container-site">
        <div className="grid md:grid-cols-2 gap-16 items-center">
          {/* Left: visual block */}
          <div className="reveal-item opacity-0 relative">
            <div className="relative bg-paper-warm border border-border-line p-12">
              {/* Decorative corner accent */}
              <div className="absolute top-0 left-0 w-12 h-12 border-t-2 border-l-2 border-accent -translate-x-3 -translate-y-3" />
              <div className="absolute bottom-0 right-0 w-12 h-12 border-b-2 border-r-2 border-accent translate-x-3 translate-y-3" />

              <div className="font-display italic text-5xl text-ink/10 leading-none mb-6 select-none">
                "
              </div>
              <p className="font-display text-xl md:text-2xl text-ink font-medium leading-snug">
                We don't just run campaigns.
                <br />
                We help brands build presence,
                <br />
                <span className="text-accent italic">communicate with purpose,</span>
                <br />
                and grow with clarity.
              </p>

              <div className="mt-10 pt-8 border-t border-border-line flex items-center gap-4">
                <div className="w-10 h-10 bg-ink rounded-full flex items-center justify-center flex-shrink-0">
                  <span className="font-display text-accent font-bold text-sm">K</span>
                </div>
                <div>
                  <div className="text-sm font-medium text-ink">Digi K</div>
                  <div className="text-xs text-muted tracking-wide uppercase">Agency manifesto</div>
                </div>
              </div>
            </div>
          </div>

          {/* Right: text */}
          <div className="reveal-item opacity-0" style={{ animationDelay: '0.2s' }}>
            <span className="label-tag">What we do</span>
            <h2 className="heading-display text-3xl md:text-4xl font-semibold leading-tight mb-6">
              A full-service digital agency for
              modern brands and businesses.
            </h2>
            <p className="text-muted text-lg leading-relaxed mb-6">
              Digi K works with entrepreneurs, growing businesses, agencies, and
              communications professionals who need a strategic partner—not just
              a service provider.
            </p>
            <p className="text-muted leading-relaxed mb-10">
              We combine marketing strategy, content creation, branding, and
              digital products into a cohesive offer designed to move brands
              forward. From building communication frameworks to executing
              campaigns that actually convert—we deliver work that matters.
            </p>

            <div className="grid grid-cols-2 gap-4">
              {[
                'Marketing strategy',
                'Brand communication',
                'Content & storytelling',
                'Digital products',
              ].map((item) => (
                <div key={item} className="flex items-center gap-2 text-sm text-ink">
                  <span className="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0" />
                  {item}
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
