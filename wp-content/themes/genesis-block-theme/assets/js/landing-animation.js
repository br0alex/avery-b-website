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
            2000,  // Stage 1: Initial state (longer to see background)
            2000,  // Stage 2: First letter appears
            2000,  // Stage 3: More text appears
            2000,  // Stage 4: Full "Coming Soon"
            3000,  // Stage 5: Portfolio showcase
            4000   // Stage 6: Final state with Instagram link
        ];
        
        console.log('LandingAnimation initialized with', this.stages.length, 'stages');
        this.init();
    }
    
    init() {
        if (!this.animationContainer) {
            console.error('Animation container not found!');
            return;
        }
        
        if (this.stages.length === 0) {
            console.error('No stages found!');
            return;
        }
        
        console.log('Starting animation initialization...');
        this.setupStages();
        this.startAnimation();
    }
    
    setupStages() {
        console.log('Setting up stages...');
        // Hide all stages except the first one
        this.stages.forEach((stage, index) => {
            if (index === 0) {
                stage.classList.add('active');
                console.log('Stage', index + 1, 'set as active');
            } else {
                stage.classList.remove('active');
            }
        });
    }
    
    startAnimation() {
        if (this.isAnimating) {
            console.log('Animation already running, skipping...');
            return;
        }
        
        console.log('Starting animation sequence...');
        this.isAnimating = true;
        this.currentStage = 0;
        
        // Start the first stage
        this.advanceToNextStage();
    }
    
    advanceToNextStage() {
        if (this.currentStage >= this.stages.length) {
            console.log('Animation complete!');
            this.completeAnimation();
            return;
        }
        
        console.log('Advancing to stage', this.currentStage + 1);
        
        // Show current stage
        this.showStage(this.currentStage);
        
        // Wait for the stage duration, then advance
        const stageDuration = this.stageTimings[this.currentStage];
        console.log('Stage', this.currentStage + 1, 'will last for', stageDuration, 'ms');
        
        setTimeout(() => {
            this.currentStage++;
            this.advanceToNextStage();
        }, stageDuration);
    }
    
    showStage(stageIndex) {
        console.log('Showing stage', stageIndex + 1);
        
        // Hide all stages
        this.stages.forEach((stage, index) => {
            stage.classList.remove('active');
        });
        
        // Show the current stage
        if (this.stages[stageIndex]) {
            this.stages[stageIndex].classList.add('active');
            console.log('Stage', stageIndex + 1, 'is now active');
        }
        
        // Trigger stage-specific animations
        this.triggerStageAnimations(stageIndex);
    }
    
    triggerStageAnimations(stageIndex) {
        const currentStage = this.stages[stageIndex];
        if (!currentStage) return;
        
        console.log('Triggering animations for stage', stageIndex + 1);
        
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
            console.log('Animating text element:', selector);
            element.style.animation = 'textReveal 0.8s ease-out forwards';
        } else {
            console.warn('Text element not found:', selector);
        }
    }
    
    animatePortfolioShowcase(stage) {
        const portfolioShowcase = stage.querySelector('.portfolio-showcase');
        if (portfolioShowcase) {
            console.log('Animating portfolio showcase');
            // Add a small delay before sliding in
            setTimeout(() => {
                portfolioShowcase.style.animation = 'slideInPortfolio 1.2s ease-out forwards';
            }, 500);
        } else {
            console.warn('Portfolio showcase not found');
        }
    }
    
    animateInstagramLink(stage) {
        const instagramLink = stage.querySelector('.instagram-link');
        if (instagramLink) {
            console.log('Animating Instagram link');
            // Add a delay before showing the Instagram link
            setTimeout(() => {
                instagramLink.style.animation = 'textReveal 0.8s ease-out forwards';
            }, 1000);
        } else {
            console.warn('Instagram link not found');
        }
    }
    
    completeAnimation() {
        console.log('Completing animation...');
        // Fade out animation container
        this.animationContainer.classList.add('fade-out');
        
        // Show main content
        if (this.mainContent) {
            this.mainContent.style.display = 'block';
        }
        
        // Hide animation container completely after fade out
        setTimeout(() => {
            this.animationContainer.classList.add('hidden');
            this.isAnimating = false;
            console.log('Animation container hidden');
        }, 500);
    }
    
    // Method to manually advance stages (for testing)
    goToStage(stageIndex) {
        if (stageIndex >= 0 && stageIndex < this.stages.length) {
            console.log('Manually going to stage', stageIndex + 1);
            this.currentStage = stageIndex;
            this.showStage(stageIndex);
        } else {
            console.warn('Invalid stage index:', stageIndex);
        }
    }
    
    // Method to restart animation
    restart() {
        console.log('Restarting animation...');
        this.currentStage = 0;
        this.isAnimating = false;
        this.animationContainer.classList.remove('fade-out', 'hidden');
        this.setupStages();
        this.startAnimation();
    }
}

// Initialize animation when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM loaded, initializing LandingAnimation...');
    const landingAnimation = new LandingAnimation();
    
    // Expose to window for debugging/testing
    window.landingAnimation = landingAnimation;
    
    // Add keyboard shortcuts for testing
    document.addEventListener('keydown', (e) => {
        switch(e.key) {
            case 'r':
            case 'R':
                console.log('Restart triggered by keyboard');
                landingAnimation.restart();
                break;
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
                const stageIndex = parseInt(e.key) - 1;
                console.log('Stage jump triggered by keyboard:', stageIndex + 1);
                landingAnimation.goToStage(stageIndex);
                break;
        }
    });
    
    console.log('LandingAnimation setup complete. Use R to restart, 1-6 to jump to stages.');
});

// Export for potential use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = LandingAnimation;
}
