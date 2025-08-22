/**
 * Landing Page Animation System
 * Customized to match Figma design exactly - 6-stage animation sequence
 */

class LandingAnimation {
    constructor() {
        this.animationContainer = document.getElementById('animation-container');
        this.mainContent = document.getElementById('main-content');
        this.stages = document.querySelectorAll('.stage');
        this.currentStage = 0;
        this.isAnimating = false;
        
        // Animation timing (in milliseconds)
        this.stageTimings = [
            1000,  // Stage 1: Initial state
            1500,  // Stage 2: First letter appears
            1500,  // Stage 3: More text appears
            2000,  // Stage 4: Full "Coming Soon"
            3000,  // Stage 5: Portfolio showcase
            4000   // Stage 6: Final state with Instagram link
        ];
        
        this.init();
    }
    
    init() {
        if (!this.animationContainer) return;
        
        this.setupStages();
        this.startAnimation();
    }
    
    setupStages() {
        // Hide all stages except the first one
        this.stages.forEach((stage, index) => {
            if (index === 0) {
                stage.classList.add('active');
            } else {
                stage.classList.remove('active');
            }
        });
    }
    
    startAnimation() {
        if (this.isAnimating) return;
        
        this.isAnimating = true;
        this.currentStage = 0;
        
        // Start the first stage
        this.advanceToNextStage();
    }
    
    advanceToNextStage() {
        if (this.currentStage >= this.stages.length) {
            this.completeAnimation();
            return;
        }
        
        // Show current stage
        this.showStage(this.currentStage);
        
        // Wait for the stage duration, then advance
        setTimeout(() => {
            this.currentStage++;
            this.advanceToNextStage();
        }, this.stageTimings[this.currentStage]);
    }
    
    showStage(stageIndex) {
        // Hide all stages
        this.stages.forEach(stage => {
            stage.classList.remove('active');
        });
        
        // Show the current stage
        if (this.stages[stageIndex]) {
            this.stages[stageIndex].classList.add('active');
        }
        
        // Trigger stage-specific animations
        this.triggerStageAnimations(stageIndex);
    }
    
    triggerStageAnimations(stageIndex) {
        const currentStage = this.stages[stageIndex];
        if (!currentStage) return;
        
        switch(stageIndex) {
            case 1: // Stage 2: First letter appears
                this.animateTextElement(currentStage, '.text-c');
                break;
                
            case 2: // Stage 3: More text appears
                this.animateTextElement(currentStage, '.text-w');
                break;
                
            case 3: // Stage 4: Full "Coming Soon"
                this.animateTextElement(currentStage, '.text-coming-soon');
                break;
                
            case 4: // Stage 5: Portfolio showcase
                this.animateTextElement(currentStage, '.text-website');
                this.animatePortfolioShowcase(currentStage);
                break;
                
            case 5: // Stage 6: Final state
                this.animateInstagramLink(currentStage);
                break;
        }
    }
    
    animateTextElement(stage, selector) {
        const element = stage.querySelector(selector);
        if (element) {
            element.style.animation = 'textReveal 0.8s ease-out forwards';
        }
    }
    
    animatePortfolioShowcase(stage) {
        const portfolioShowcase = stage.querySelector('.portfolio-showcase');
        if (portfolioShowcase) {
            // Add a small delay before sliding in
            setTimeout(() => {
                portfolioShowcase.style.animation = 'slideInPortfolio 1.2s ease-out forwards';
            }, 500);
        }
    }
    
    animateInstagramLink(stage) {
        const instagramLink = stage.querySelector('.instagram-link');
        if (instagramLink) {
            // Add a delay before showing the Instagram link
            setTimeout(() => {
                instagramLink.style.animation = 'textReveal 0.8s ease-out forwards';
            }, 1000);
        }
    }
    
    completeAnimation() {
        // Fade out animation container
        this.animationContainer.classList.add('fade-out');
        
        // Show main content
        this.mainContent.style.display = 'block';
        
        // Hide animation container completely after fade out
        setTimeout(() => {
            this.animationContainer.classList.add('hidden');
            this.isAnimating = false;
        }, 500);
    }
    
    // Method to manually advance stages (for testing)
    goToStage(stageIndex) {
        if (stageIndex >= 0 && stageIndex < this.stages.length) {
            this.currentStage = stageIndex;
            this.showStage(stageIndex);
        }
    }
    
    // Method to restart animation
    restart() {
        this.currentStage = 0;
        this.isAnimating = false;
        this.animationContainer.classList.remove('fade-out', 'hidden');
        this.setupStages();
        this.startAnimation();
    }
}

// Initialize animation when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    const landingAnimation = new LandingAnimation();
    
    // Expose to window for debugging/testing
    window.landingAnimation = landingAnimation;
    
    // Add keyboard shortcuts for testing
    document.addEventListener('keydown', (e) => {
        switch(e.key) {
            case 'r':
            case 'R':
                landingAnimation.restart();
                break;
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
                const stageIndex = parseInt(e.key) - 1;
                landingAnimation.goToStage(stageIndex);
                break;
        }
    });
});

// Export for potential use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = LandingAnimation;
}
