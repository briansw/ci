Rails.application.routes.draw do

  root to: 'lectures#index'

  scope only: [:index, :show] do
    resources :lectures
    resources :assignments
    resources :resources
  end

  resources :readings, only: :index

  admin_for :lectures, :assignments, :readings, :students, :courses, :users
  admin_for :images, private: true

  namespace :admin do
    root to: 'lectures#index'

    get  'login',  to: 'sessions#new'
    post 'login',  to: 'sessions#create'
    get  'logout', to: 'sessions#destroy'
  end

end
