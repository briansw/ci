source 'https://rubygems.org'

gem 'rails', '4.1.6'
gem 'mysql2'
gem 'sass-rails', '~> 4.0.3'
gem 'uglifier', '>= 1.3.0'
gem 'coffee-rails', '~> 4.0.0'
gem 'execjs'
gem 'jquery-rails'
gem 'jbuilder', '~> 2.0'
gem 'sdoc', '~> 0.4.0', group: :doc
gem 'bcrypt-ruby', '~> 3.1.5'
gem 'brb', '0.0.2', git: 'git@github.com:briansw/brb.git'

# Image manipulation dependencies
gem 'mini_magick'

# Search dependencies
gem 'elasticsearch-model'
gem 'elasticsearch-rails'

group :development do
  gem 'spring'
  gem 'guard-rspec', '~> 3.0.2'
  gem 'guard-spork', '~> 1.5.1'
  gem 'spork-rails', github: 'sporkrb/spork-rails'
  gem 'rb-fsevent', '~> 0.9.3'
  gem 'rails_best_practices', '~> 1.14.4'
  gem 'capistrano'
  gem 'capistrano-rvm'
  gem 'capistrano-bundler'
  gem 'capistrano-rails'
end

group :development, :test do
  gem 'rspec-rails', '~> 2.14.0'
  gem 'factory_girl_rails', '~> 4.2.1'
end

group :test do
  gem 'faker', '~> 1.1.2'
  gem 'capybara', '~> 2.1.0'
  gem 'database_cleaner', '~> 1.0.1'
  gem 'launchy', '~> 2.3.0'
  gem 'shoulda-matchers', '~> 2.2.0', require: false
  gem 'selenium-webdriver', '~> 2.35.1'
end
